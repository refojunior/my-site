<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;
use App\Article;
use App\Category;

class TagController extends Controller
{
    public function search($category_id) {
    	$data['tag'] = Tag::join('articles', 'articles.id', '=', 'tags.article_id')
    			->join('categories', 'categories.id', '=', 'tags.category_id')
    			->where('category_id', $category_id)
    			->paginate(8);

    	$data['category'] = Category::find($category_id);;
    	$data['menu'] = 0;


    	return view('backend.tag.search', $data);

    }
}
