<?php 
//Helper ini sangat berguna cuy..
use Illuminate\Support\Facades\DB;
use App\Tag;
use App\Article;

function cek_helper(){
    return "Call From Helpers";
}

function notifMsg($stat, $msg){
    \Session::put($stat, $msg);
}

function inputArticle($request, $fileName){
	return [
		'title' => $request->title,
        'date' => $request->date,
        'content' => $request->content,
        'excerpt' => $request->excerpt,
        'keywords' => $request->keywords,
        'cover' => $fileName,
        'user_id' => Auth::user()->id
	];
}

function inputTags($arr, $article_id) {
    for($i = 0; $i < count($arr); $i++){
        Tag::create([
            'category_id' => $arr[$i],
            'article_id' => $article_id
        ]);
    }
}

//resize image upload cover
function resize($image){
    $img = Image::make('storage/cover/'.$image);
    $img->fit(350, 180, function ($constraint) {
        $constraint->upsize();
    });
    $img->save('storage/cover/resize/'.$image);
    return $img;
}

function thumbnails($image){
    $img = Image::make('storage/cover/'.$image);
    $img->fit(128, 103, function($constraint) {
        $constraint->upsize();
    });

    $img->save('storage/cover/thumbnail/'.$image);
    return $img;
}

//search selected tags
function searchSelectedTag($article_id){
    $src = DB::table('tags')
            ->join('categories', 'categories.id', '=', 'tags.category_id')
            ->where('article_id', $article_id)->get();
    return $src;
}

//check selected di form edit
function checkSelected($option, $id){
    $tag = DB::table('tags')
            ->join('categories', 'categories.id', '=', 'tags.category_id')
            ->where('article_id', $id)
            ->where('tags.category_id', $option)->get();
    
    foreach($tag as $select){
        return 'selected';
    }

    return false;
}

function styleNavbar(){
    return "
    <style>
        #mainNav {
            background-color: white;
        }
        #mainNav .navbar-nav > li > a,
        #mainNav .navbar-nav > li > a:focus {
            color: black;
        }

        
        #mainNav .navbar-nav > li > a:hover {
            color: #e74c3c;

        }
    </style>";
}

function linkTitle($title){
    $lower = strtolower($title);
    $replace = str_replace(" ", "-", $lower);
    return $replace;
}

function updateClicks($article_id){
    $article = Article::find($article_id);
    $article->clicks += 1;
    Article::where('id', $article_id)->update([
        'clicks' => $article->clicks
    ]);
}



?>