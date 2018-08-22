<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Doctor;
use App\Testimonial;
class CirugiaBariatricaController extends Controller
{
public function manga_gastrica(){
    return view('cirugia_ariatrica.manga_gastrica',[]);
}
public function bypass_gastrico(){
    return view('cirugia_ariatrica.bypass',[]);
}
public function paquetes_cirugias(){
    return view('cirugia_ariatrica.paquetes',[]);
}
public function imc(){
     return view('cirugia_ariatrica.imc',[]);
}
public function obesidad(){
    return view('cirugia_ariatrica.obesidad',[]);
}
public function revision_bariatrica(){
	return view('cirugia_ariatrica.revision_bariatrica',[]);	
}
public function switch_duodenal(){
	return view('cirugia_ariatrica.switch_duodenal',[]);	
}
}
