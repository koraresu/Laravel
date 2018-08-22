<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Doctor;
use App\Testimonial;
use App\DoctorTranslation;
use App\DoctorMember;
use App\DoctorMemberTranslation;
use App\DoctorCertificate;
use LaravelLocalization;
class CirujanosController extends Controller
{
    public function cirujanos(){
    	return view('cirujanos',[
			'doctors' => Doctor::get(),
		]);
    }
    public function cirujano($cirujano){
    	$doctor = DoctorTranslation::where('url','=',$cirujano)->where('locale','=', LaravelLocalization::getCurrentLocale() )->first();
        
        
    	$doctor_member = DoctorMember::where('doctor_id','=',$doctor->doctor_id)->get();
        $doctor_certificate = DoctorCertificate::where('doctor_id','=',$doctor->doctor_id)->get();
		$description = $doctor->description;
		$laboral = $doctor->laboral;
		$chequeo = $doctor->chequeo;
		$reconocimientos = $doctor->reconocimientos;


    	$description = str_replace('\r\n','', $description);
    	$laboral = str_replace('\r\n','', $laboral);
    	$chequeo = str_replace('\r\n','', $chequeo);
    	$reconocimientos = str_replace('\r\n','', $reconocimientos);

        
    	return view('cirujano',[
    		'title'  => $doctor->title,
    		'name'   => $doctor->name,
    		'description' => $description,
    		'laboral' => $laboral,
    		'chequeo' => $chequeo,
    		'reconocimientos' => $reconocimientos,
    		'photo' => $doctor->photo,
			'phone' => $doctor->phone,
			'speciality' => $doctor->speciality,
			'education' => $doctor->education,
			'days' => $doctor->days,
			'members' => $doctor_member,
			'certificates' => $doctor_certificate,
            'seo_title' => $doctor->seo_title,
            'seo_keywords' => $doctor->seo_keywords,
            'seo_description' => $doctor->seo_description
		]);	
    }
    public function dr_sergio(){
        $doctor = Doctor::where('id','=',1)->first();

        $doctor_member = DoctorMember::where('doctor_id','=',$doctor->id)->get();
        $doctor_certificate = DoctorCertificate::where('doctor_id','=',$doctor->id)->get();
        $description = $doctor->description;
        $laboral = $doctor->laboral;
        $chequeo = $doctor->chequeo;
        $reconocimientos = $doctor->reconocimientos;
        $degree = $doctor->degree;


        $description = str_replace('\r\n','', $description);
        $laboral = str_replace('\r\n','', $laboral);
        $chequeo = str_replace('\r\n','', $chequeo);
        $reconocimientos = str_replace('\r\n','', $reconocimientos);
        return view('dr_sergio',[
            'title'  => $doctor->title,
            'name'   => $doctor->name,
            'description' => $description,
            'laboral' => $laboral,
            'chequeo' => $chequeo,
            'reconocimientos' => $reconocimientos,
            'photo' => $doctor->photo,
            'phone' => $doctor->phone,
            'speciality' => $doctor->speciality,
            'education' => $doctor->education,
            'days' => $doctor->days,
            'members' => $doctor_member,
            'certificates' => $doctor_certificate,
            'seo_title' => $doctor->seo_title,
            'seo_keywords' => $doctor->seo_keywords,
            'seo_description' => $doctor->seo_description,
            'degree' => $degree
        ]);
    }
}
