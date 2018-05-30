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
	];
    public function RealDoctor()
    {
        return $this->hasMany('App\DoctorTranslation','doctor_id', 'id');
    }
}
