<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Doctor;
use App\Testimonial;
class TestimoniosController extends Controller
{
    public function index(){
        return view('home',[
			'doctors' => Doctor::get(),
			'testimoniales' => Testimonial::get()
		]);
    }
    public function calculos_biliares(){
        return view('home',[
			'doctors' => Doctor::get(),
			'testimoniales' => Testimonial::get()
		]);
    }
    public function diverticulitis(){
        return view('home',[
			'doctors' => Doctor::get(),
			'testimoniales' => Testimonial::get()
		]);
    }
    public function hernias(){
        return view('home',[
			'doctors' => Doctor::get(),
			'testimoniales' => Testimonial::get()
		]);
    }
    public function hernias_hiatal(){
        return view('home',[
			'doctors' => Doctor::get(),
			'testimoniales' => Testimonial::get()
		]);
    }
}
