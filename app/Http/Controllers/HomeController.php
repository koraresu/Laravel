<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use App\Doctor;
use App\Testimonial;
use File;
class HomeController extends Controller
{
    public function index(){
		return view('home',[
			'doctors' => Doctor::get(),
			'testimoniales' => Testimonial::limit(3)->get()
		]);
	}
	public function vallarta(){
		return view('vallarta',[
    		'photos' => File::files(public_path() . '/images/vallarta')
    	]);
	}
	public function contacto(){
		return view('contacto',[]);
	}
	public function privacidad(){
		return view('aviso_privacidad',[]);
	}
	public function galery(){
		return view('galeria',[]);
	}
}
