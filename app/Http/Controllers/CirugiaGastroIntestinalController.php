<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Doctor;
use App\Testimonial;
class CirugiaGastroIntestinalController extends Controller
{
    public function apendicitis(){
        return view('cirugia-gastrointestinal.apendicitis',[]);
    }
    public function calculos_biliares(){
        return view('cirugia-gastrointestinal.calculos_biliares',[]);
    }
    public function diverticulitis(){
        return view('cirugia-gastrointestinal.diverticulitis',[]);
    }
    public function hernias(){
        return view('cirugia-gastrointestinal.hernias',[]);
    }
    public function hernias_hiatal(){
        return view('cirugia-gastrointestinal.hernia_hiatal',[]);
    }
}
