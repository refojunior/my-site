<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Article;
use App\Category;
use App\Tag;

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


    public function searchTags($category_id){
        $data['tag'] = Tag::join('articles', 'articles.id', '=', 'tags.article_id')
                ->join('categories', 'categories.id', '=', 'tags.category_id')
                ->where('category_id', $category_id)
                ->paginate(8);

        $data['category'] = Category::find($category_id);;
        $data['menu'] = 0;
        return view('frontend.article.search_tag', $data);

    }
}