<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use \Dimsav\Translatable\Translatable;
    protected $table = 'testimonial';
    
    public $translatedAttributes = [
    	'patient',
    	'photo_before',
    	'photo_after',
    	'description',
    	'surgery'
	];
    public function RealTestimonial()
    {
        return $this->hasMany('App\TestimonialTranslation','testimonial_id', 'id');
    }
}

