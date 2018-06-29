<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model
{
    use \Dimsav\Translatable\Translatable;
    protected $table = 'blog_categories';
    
    public $translatedAttributes = [
    	'nombre',
    	'slug',
	];
}
