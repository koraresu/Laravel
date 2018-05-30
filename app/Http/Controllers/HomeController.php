<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use App\Doctor;
use App\Testimonial;
class HomeController extends Controller
{
    public function index(){
		return view('home',[
			'doctors' => Doctor::get(),
			'testimoniales' => Testimonial::get()
		]);
		}
	public function vallarta(){
		return "A";
	}
	public function contacto(){}
	public function privacidad(){}
	public function galery(){}
}
