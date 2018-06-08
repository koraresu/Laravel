<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slideshow extends Model
{
    use \Dimsav\Translatable\Translatable;
    protected $table = 'slideshow';
    
    public $translatedAttributes = [
    	'title',
    	'subtitle',
    	'photo'
	];
}
