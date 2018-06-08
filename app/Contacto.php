<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
	protected $table = 'contact';
    protected $fillable = ['firstname', 'lastname', 'email','information','message'];
}
	