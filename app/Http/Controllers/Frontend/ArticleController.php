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
        $data['menu'] = 3;
    	return view('frontend.article.index', $data);
    }

    public function read($title){
        $title = ucwords(str_replace("-", " ", $title));
        $data['article'] = Article::where('title', $title)->first();
        updateClicks($data['article']->id);
    	$data['tags'] = Category::all();
    	$data['new_articles'] = Article::orderBy('date', 'desc')->paginate(3);
        $data['right_articles'] = Article::inRandomOrder()->paginate(4);
        $data['menu'] = 3;
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

    public function searchArticle(Request $request){
        $keywords = $request->search;
        $data['keywords'] = $request->search;
        $data['articles'] = Article::where('title', 'like', '%'.$keywords.'%')->paginate(8);
        $data['menu'] = 3;
        return view('frontend.article.search_article', $data);
    }
}
