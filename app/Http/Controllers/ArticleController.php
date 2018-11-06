<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreArticle;
use Illuminate\Http\Request;
use App\Article;
use App\Category;
use App\Tag;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['menu'] = 3;
        $data['articles'] = Article::all();
        return view('backend.article.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['menu'] = 3;
        $data['categories'] = Category::all();
        return view('backend.article.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreArticle $request)
    {
        $validate = $request->validated();
        if($validate){
            //upload cover
            $cover = $request->file('cover')->store('cover');
            $fileName = explode('/', $cover);
            //insert table article
            $LastestId = Article::create(inputArticle($request, $fileName[1]))->id;
            //try resize
            try {
                resize($fileName[1]);
            } catch (Exception $e) {
                dd($e->getMessage());
            }

            //insert category
            for($i = 0; $i < count($request->tags); $i++){
               Tag::create([
                    'category_id' => $request->tags[$i],
                    'article_id' => $LastestId
                ]);
            }

            notifMsg('success', 'Add Article Successfully');
            return redirect()->route('article.index');

        } else {
            notifMsg('danger', 'Add Article Failed!');
            return redirect()->route('article.index');
        }
        
        

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
