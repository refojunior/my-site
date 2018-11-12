<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Article;

class HomeController extends Controller
{
    public function index(){
    	$data['articles'] = Article::orderBy('date', 'desc')->paginate(3);
    	return view('frontend.home.index', $data);
    }
}
