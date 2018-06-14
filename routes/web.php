<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::group([
		'prefix' => LaravelLocalization::setLocale(),
		'middleware' => [
            'localeSessionRedirect',
            'localizationRedirect',
            'localeViewPath'
        ]
	], function()
{
    //Home
    Route::get(LaravelLocalization::transRoute('routes.home'), 'HomeController@index')->name('home');
    Route::get( LaravelLocalization::transRoute('routes.puerto_vallarta') , 'HomeController@vallarta')-> name('vallarta');
    Route::get( LaravelLocalization::transRoute('routes.contacto') , 'HomeController@contacto')-> name('contacto');
    Route::get( LaravelLocalization::transRoute('routes.contacto_thx') , 'HomeController@contact_thx')-> name('contacto_thx');
    Route::get( LaravelLocalization::transRoute('routes.privacidad') , 'HomeController@privacidad')-> name('privacidad');
    Route::get( LaravelLocalization::transRoute('routes.galery') , 'HomeController@galery')-> name('galery');
    Route::get( 'blog' , 'BlogController@index')-> name('blog');
    Route::get( 'blog/{article}' , 'BlogController@article')-> name('blog_article');
    Route::post( LaravelLocalization::transRoute('routes.contact_form') , 'HomeController@contact_form')-> name('contact_form');
    //Cirugia GastroIntestinal
    Route::get( LaravelLocalization::transRoute('routes.gastrointestinal_apendicitis') , 'CirugiaGastroIntestinalController@apendicitis')-> name('apendicitis');
    Route::get( LaravelLocalization::transRoute('routes.gastrointestinal_calculos') , 'CirugiaGastroIntestinalController@calculos_biliares')-> name('calculo');
    Route::get( LaravelLocalization::transRoute('routes.gastrointestinal_diverticulitis') , 'CirugiaGastroIntestinalController@diverticulitis')-> name('diverticulitis');
    Route::get( LaravelLocalization::transRoute('routes.gastrointestinal_hernias') , 'CirugiaGastroIntestinalController@hernias')-> name('hernias');
    Route::get( LaravelLocalization::transRoute('routes.gastrointestinal_hernia_hiatal') , 'CirugiaGastroIntestinalController@hernias_hiatal')-> name('hernias_hiatal');
    //Cirugia Bariatrica
    Route::get( LaravelLocalization::transRoute('routes.bariatrica_manga_gastrica') , 'CirugiaBariatricaController@manga_gastrica')-> name('manga_gastrica');
    Route::get( LaravelLocalization::transRoute('routes.bariatrica_bypass') , 'CirugiaBariatricaController@bypass_gastrico')-> name('bypass');
    Route::get( LaravelLocalization::transRoute('routes.bariatrica_paquetes') , 'CirugiaBariatricaController@paquetes_cirugias')-> name('paquetes');
    Route::get( LaravelLocalization::transRoute('routes.bariatrica_imc') , 'CirugiaBariatricaController@imc')-> name('imc');
    Route::get( LaravelLocalization::transRoute('routes.bariatrica_obesidad') , 'CirugiaBariatricaController@obesidad')-> name('obesidad');
    //Cirujanos
    Route::get( LaravelLocalization::transRoute('routes.cirujanos_bariatricos') , 'CirujanosController@cirujanos')-> name('cirujanos');
    Route::get( LaravelLocalization::transRoute('routes.dr_sergio') , 'HomeController@index')-> name('dr_sergio');
    //Testimonios
    Route::get( LaravelLocalization::transRoute('routes.testimonios') , 'TestimoniosController@index')-> name('testimonios');
    // Hospital
    Route::get( LaravelLocalization::transRoute('routes.hospital_cmq_premiere') , 'HospitalController@cmq_premiere')-> name('cmq_premiere');
    Route::get( LaravelLocalization::transRoute('routes.hospital_cmq_riviera_nayarit') , 'HospitalController@cmq_nayarit')-> name('cmq_riviera_nayarit');
    Route::get( LaravelLocalization::transRoute('routes.hospital_consultorio_cirujano_bariatrico') , 'HospitalController@consultorio')-> name('consultorio'); 
    Route::get(LaravelLocalization::transRoute('routes.drs'), 'CirujanosController@cirujano')->name('cirujano');
    Route::get(LaravelLocalization::transRoute('routes.dr_sergio'), 'CirujanosController@dr_sergio')->name('cirujano');
});