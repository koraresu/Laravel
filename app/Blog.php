<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use \Dimsav\Translatable\Translatable;
    protected $table = 'blog';
    
    public $translatedAttributes = [
    	'titulo',
    	'descripcion',
    	'previo',
    	'slug',
    	'image_banner',
    	'small_image_banner',
	];
}
