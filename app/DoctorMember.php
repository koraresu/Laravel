<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DoctorMember extends Model
{
    use \Dimsav\Translatable\Translatable;
    protected $table = 'doctor_member';
    
    public $translatedAttributes = [
    	'name',
	];
}
