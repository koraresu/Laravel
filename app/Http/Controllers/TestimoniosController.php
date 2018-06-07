<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Doctor;
use App\Testimonial;
class TestimoniosController extends Controller
{
    public function index(){
        return view('testimonio',[
        	'testimoniales' => Testimonial::get()
    	]);
    }
}
