<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;

class Blog extends Model
{
    use CrudTrait;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'blog';
    // protected $primaryKey = 'id';
    // public $timestamps = false;
    protected $guarded = [''];
    //protected $fillable = [];
    // protected $hidden = [];
    // protected $dates = [];
    protected $casts=[
        'fecha'=>'timestamp'
    ];

    protected $appends = [
        'titulo_es',
        'previo_es',
        'descripcion_es',
        'titulo_en',
        'previo_en',
        'descripcion_en',
    ];

    protected $with = [
        'translation'
    ];

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */


    function hyphenize($string) {
        $dict = array(
            "I'm"      => "I am",
            "thier"    => "their",
            // Add your own replacements here
        );
        return strtolower(
            preg_replace(
              array( '#[\\s-]+#', '#[^A-Za-z0-9\. -]+#' ),
              array( '-', '' ),
              // the full cleanString() can be downloaded from http://www.unexpectedit.com/php/php-clean-string-of-utf8-chars-convert-to-similar-ascii-char
              $this->cleanString(
                  str_replace( // preg_replace can be used to support more complicated replacements
                      array_keys($dict),
                      array_values($dict),
                      urldecode($string)
                  )
              )
            )
        );
    }

    public function cleanString($text) {
        // 1) convert á ô => a o
        $text = preg_replace("/[áàâãªä]/u","a",$text);
        $text = preg_replace("/[ÁÀÂÃÄ]/u","A",$text);
        $text = preg_replace("/[ÍÌÎÏ]/u","I",$text);
        $text = preg_replace("/[íìîï]/u","i",$text);
        $text = preg_replace("/[éèêë]/u","e",$text);
        $text = preg_replace("/[ÉÈÊË]/u","E",$text);
        $text = preg_replace("/[óòôõºö]/u","o",$text);
        $text = preg_replace("/[ÓÒÔÕÖ]/u","O",$text);
        $text = preg_replace("/[úùûü]/u","u",$text);
        $text = preg_replace("/[ÚÙÛÜ]/u","U",$text);
        $text = preg_replace("/[’‘‹›‚]/u","'",$text);
        $text = preg_replace("/[“”«»„]/u",'"',$text);
        $text = str_replace("–","-",$text);
        $text = str_replace(" "," ",$text);
        $text = str_replace("ç","c",$text);
        $text = str_replace("Ç","C",$text);
        $text = str_replace("ñ","n",$text);
        $text = str_replace("Ñ","N",$text);
     
        //2) Translation CP1252. &ndash; => -
        $trans = get_html_translation_table(HTML_ENTITIES); 
        $trans[chr(130)] = '&sbquo;';    // Single Low-9 Quotation Mark 
        $trans[chr(131)] = '&fnof;';    // Latin Small Letter F With Hook 
        $trans[chr(132)] = '&bdquo;';    // Double Low-9 Quotation Mark 
        $trans[chr(133)] = '&hellip;';    // Horizontal Ellipsis 
        $trans[chr(134)] = '&dagger;';    // Dagger 
        $trans[chr(135)] = '&Dagger;';    // Double Dagger 
        $trans[chr(136)] = '&circ;';    // Modifier Letter Circumflex Accent 
        $trans[chr(137)] = '&permil;';    // Per Mille Sign 
        $trans[chr(138)] = '&Scaron;';    // Latin Capital Letter S With Caron 
        $trans[chr(139)] = '&lsaquo;';    // Single Left-Pointing Angle Quotation Mark 
        $trans[chr(140)] = '&OElig;';    // Latin Capital Ligature OE 
        $trans[chr(145)] = '&lsquo;';    // Left Single Quotation Mark 
        $trans[chr(146)] = '&rsquo;';    // Right Single Quotation Mark 
        $trans[chr(147)] = '&ldquo;';    // Left Double Quotation Mark 
        $trans[chr(148)] = '&rdquo;';    // Right Double Quotation Mark 
        $trans[chr(149)] = '&bull;';    // Bullet 
        $trans[chr(150)] = '&ndash;';    // En Dash 
        $trans[chr(151)] = '&mdash;';    // Em Dash 
        $trans[chr(152)] = '&tilde;';    // Small Tilde 
        $trans[chr(153)] = '&trade;';    // Trade Mark Sign 
        $trans[chr(154)] = '&scaron;';    // Latin Small Letter S With Caron 
        $trans[chr(155)] = '&rsaquo;';    // Single Right-Pointing Angle Quotation Mark 
        $trans[chr(156)] = '&oelig;';    // Latin Small Ligature OE 
        $trans[chr(159)] = '&Yuml;';    // Latin Capital Letter Y With Diaeresis 
        $trans['euro'] = '&euro;';    // euro currency symbol 
        ksort($trans); 
         
        foreach ($trans as $k => $v) {
            $text = str_replace($v, $k, $text);
        }
     
        // 3) remove <p>, <br/> ...
        $text = strip_tags($text); 
         
        // 4) &amp; => & &quot; => '
        $text = html_entity_decode($text);
         
        // 5) remove Windows-1252 symbols like "TradeMark", "Euro"...
        $text = preg_replace('/[^(\x20-\x7F)]*/','', $text); 
         
        $targets=array('\r\n','\n','\r','\t');
        $results=array(" "," "," ","");
        $text = str_replace($targets,$results,$text);
     
        //XML compatible
        /*
        $text = str_replace("&", "and", $text);
        $text = str_replace("<", ".", $text);
        $text = str_replace(">", ".", $text);
        $text = str_replace("\\", "-", $text);
        $text = str_replace("/", "-", $text);
        */
         
        return ($text);
    }

    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */

    public function translation()
    {

        $locale = \LaravelLocalization::getCurrentLocale();

        return $this->hasOne(Blog_translation::class)->where('locale', $locale);
    }

    public function translations()
    {
        return $this->hasOne(Blog_translation::class);
    }

    public function translationsWithLocale($locale = null)
    {
        $locale = !is_null($locale) ? $locale : \LaravelLocalization::getCurrentLocale();

        return $this->hasOne(Blog_translation::class)->where('locale', $locale)->first();
    }

    public function getTituloEsAttribute()
    {
        $query = $this
            ->translations()
            ->where('blog_id', $this->blog_id)
            ->where('locale', 'es')->first();

        return $query->titulo;
    }

    public function getPrevioEsAttribute()
    {
        $query = $this
            ->translations()
            ->where('blog_id', $this->blog_id)
            ->where('locale', 'es')->first();

        return $query->previo;
    }

    public function getDescripcionEsAttribute()
    {
        $query = $this
            ->translations()
            ->where('blog_id', $this->blog_id)
            ->where('locale', 'es')->first();

        return $query->descripcion;
    }

    // ------------------------------------------

    public function getTituloEnAttribute()
    {
        $query = $this
            ->translations()
            ->where('blog_id', $this->blog_id)
            ->where('locale', 'en')->first();

        return $query->titulo;
    }

    public function getPrevioEnAttribute()
    {
        $query = $this
            ->translations()
            ->where('blog_id', $this->blog_id)
            ->where('locale', 'en')->first();

        return $query->previo;
    }

    public function getDescripcionEnAttribute()
    {
        $query = $this
            ->translations()
            ->where('blog_id', $this->blog_id)
            ->where('locale', 'en')->first();

        return $query->descripcion;
    }

    /*
    |--------------------------------------------------------------------------
    | SCOPES
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | ACCESORS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */


}
