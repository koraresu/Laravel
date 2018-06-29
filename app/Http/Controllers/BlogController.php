<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Blog;
use \App\BlogTranslations;
use LaravelLocalization;
class BlogController extends Controller
{
	public function index(){
		setlocale(LC_ALL, "es_MX.utf8");
		$art1 = new \stdClass();
		$art1->title = 'Preparación antes de una Cirugía Bariátrica (Nota #1)';
		$art1->created_at = new \DateTime();
		$art1->author = 'Dr. Sergio del Hoyo';
		$art1->photo = 'images/b1.jpg';

		$art2 = new \stdClass();
		$art2->title = 'Hábitos que provocan sobrepeso (Nota #2)';
		$art2->created_at = new \DateTime();
		$art2->author = 'Dr. Sergio del Hoyo';
		$art2->photo = 'images/b1.jpg';
		
		$art3 = new \stdClass();
		$art3->title = 'La mejor forma de eliminar las grasas (Nota #3)';
		$art3->created_at = new \DateTime();
		$art3->author = 'Dr. Sergio del Hoyo';
		$art3->photo = 'images/b1.jpg';


		return view('blog.index',[
			'articles' => [
				$art1,
				$art2,
				$art3
			]
    	]);
    }
    public function article($article){
    	$locale  = LaravelLocalization::getCurrentLocale();
    	$olocale = '';

    	if($locale == 'es'){

    	}else{

    	}

    	$blogT = BlogTranslations::where('slug','=',$article)->where('locale','=', LaravelLocalization::getCurrentLocale() )->first();
    	$blog = Blog::where('id','=',$blogT->id)->first();
    	
    	

    	return view('blog.article', [
    		'blog'       => $blog,
    		'blog_trans' => $blogT
    	]);
    }
}
