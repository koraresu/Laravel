<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \App\TagTranslation;
use LaravelLocalization;
class BlogHasTag extends Model
{
    protected $table = 'blog_has_tag';
    public function GetTag()
    {
        return TagTranslation::where('tag_id','=',$this->tag_id)->where('locale','=', LaravelLocalization::getCurrentLocale() )->first();
    }
}