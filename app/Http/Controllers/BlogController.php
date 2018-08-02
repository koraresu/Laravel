<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Blog;
use \App\BlogTranslation;
use \App\BlogHasTag;
use \App\TagTranslation;
use LaravelLocalization;
use DB;
class BlogController extends Controller
{
	public function index(){
		setlocale(LC_ALL, "es_MX.utf8");

		$articles = BlogTranslation::where('locale','=', LaravelLocalization::getCurrentLocale() )->orderBy('created_at', 'desc')->limit(5)->get();


		$b_archive   = BlogTranslation::where('locale','=', LaravelLocalization::getCurrentLocale() )->orderBy('created_at', 'desc')->limit(5)->get();
    	
    	$m_archive = DB::select('select MONTH(`created_at`) as month,YEAR(`created_at`) as year,count(`created_at`) as cuenta from `blog_translations` where `locale` = \'' . LaravelLocalization::getCurrentLocale() . '\' group by `created_at` order by `created_at`');

		return view('blog.index',[
			'articles' => $articles,
			'b_archive'   => $b_archive,
    		'm_archive'   => $m_archive
    	]);
    }
    public function article($article){
    	$locale  = LaravelLocalization::getCurrentLocale();
    	$olocale = '';

    	$blogT   = BlogTranslation::where('slug','=',$article)->where('locale','=', LaravelLocalization::getCurrentLocale() )->first();
    	$blog    = Blog::where('id','=',$blogT->id)->first();
    	$tags    = BlogHasTag::where('blog_id','=',$blogT->id)->get();

    	$b_archive   = BlogTranslation::where('locale','=', LaravelLocalization::getCurrentLocale() )->orderBy('created_at', 'desc')->limit(5)->get();
    	
    	$m_archive = DB::select('select MONTH(`created_at`) as month,YEAR(`created_at`) as year,count(`created_at`) as cuenta from `blog_translations` where `locale` = \'' . LaravelLocalization::getCurrentLocale() . '\' group by `created_at` order by `created_at`');


    	//dd( $m_archive );
    	return view('blog.article', [
    		'blog'        => $blog,
    		'blog_trans'  => $blogT,
    		'tags'        => $tags,
    		'b_archive'   => $b_archive,
    		'm_archive'   => $m_archive
    	]);
    }
}
