<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Doctor;
use App\Testimonial;
use File;
class HospitalController extends Controller
{
    public function cmq_premiere(){
    	return view('hospital.cmq_premiere',[
    		'photos' => File::files(public_path() . '/images/hospital/cmq_premiere'),
    		'folder' => 'cmq_premiere'
    	]);
    }
    public function cmq_nayarit(){
    	return view('hospital.cmq_nayarit',[
    		'photos' => File::files(public_path() . '/images/hospital/cmq_nayarit'),
    		'folder' => 'cmq_nayarit'
    	]);
    }
    public function consultorio(){
    	return view('hospital.consultorio',[
    		'photos' => File::files(public_path() . '/images/hospital/consultorio'),
    		'folder' => 'consultorio'
    	]);
    }
    
}
