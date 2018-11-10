<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Article;
use App\Category;

class ArticleController extends Controller
{
    public function index(){
    	$data['articles'] = Article::orderBy('date', 'desc')->paginate(8);
    	return view('frontend.article.index', $data);
    }

    public function read($title){
    	$title = ucwords(str_replace("-", " ", $title));
    	$data['tags'] = Category::all();
    	$data['article'] = Article::where('title', $title)->first();
    	$data['articles'] = Article::orderBy('date', 'desc')->paginate(3);
    	return view('frontend.article.read', $data);
    }
}
