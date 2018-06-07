<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
	use \Dimsav\Translatable\Translatable;
    protected $table = 'doctor';
    
    public $translatedAttributes = [
    	'title',
    	'name',
    	'photo',
    	'description',
    	'laboral',
    	'chequeo',
    	'reconocimientos',
    	'phone',
    	'speciality',
    	'education',
    	'days',
    	'member',
        'url',
        'seo_title',
        'seo_keywords',
        'seo_description'
	];
    public function RealDoctor()
    {
        return $this->hasMany('App\DoctorTranslation','doctor_id', 'id');
    }
}
