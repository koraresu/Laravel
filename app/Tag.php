<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use \Dimsav\Translatable\Translatable;
    protected $table = 'tag';
    
    public $translatedAttributes = [
		'nombre',
		'slug',
	];
	public function GetTagTrans()
    {
        return $this->hasOne('App\TagTranslation','tag_id', 'id');
    }
}
