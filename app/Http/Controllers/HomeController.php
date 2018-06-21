<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use Mail;
use App\Mail\ContactShipped;
use App\Doctor;
use App\Testimonial;
use App\Slideshow;
use App\Contacto;
use File;
use LaravelLocalization;
class HomeController extends Controller
{
    public function index(){
		return view('home',[
			'doctors' => Doctor::get(),
			'testimoniales' => Testimonial::limit(3)->get(),
			'slides' => Slideshow::get(),
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
	public function contact_form(Request $request){
		$messages = [
    		'firstname.required'   => LaravelLocalization::transRoute('contacto.error.firstname.required'),
    		'lastname.required'    => LaravelLocalization::transRoute('contacto.error.lastname.required'),
    		'email.required'       => LaravelLocalization::transRoute('contacto.error.email.required'),
    		'information.required' => LaravelLocalization::transRoute('contacto.error.information.required'),
    		'message.required'     => LaravelLocalization::transRoute('contacto.error.message.required'),
    		'g-recaptcha-response.required'=> LaravelLocalization::transRoute('contacto.error.recaptcha.required'),
		];
		$validator = \Validator::make($request->all(), [
            'firstname'   => 'required',
			'lastname'    => 'required',
            'email'       => 'required',
            'information' => 'required',
            'message'     => 'required',
            'g-recaptcha-response' => 'required'
        ], $messages);

        if ($validator->fails()) {
        	return redirect( LaravelLocalization::transRoute('routes.contacto') )
            ->withErrors($validator)
			->withInput();
        }
		$input = $request->all();
		print_r( $input );
		$contact_data = Contacto::create($request->all());
		$contact_data = Contacto::findOrFail( $contact_data->id );
		//Mail::to('rkenshin21@gmail.com')->send(new ContactShipped($contact_data));

		//return redirect()->route('contacto_thx');
	}
	public function contact_thx(){
		return view('contacto_thx',[]);
	}
	public function privacidad(){
		return view('aviso_privacidad',[]);
	}
	public function gallery(){
		return view('galeria',[]);
	}
}
