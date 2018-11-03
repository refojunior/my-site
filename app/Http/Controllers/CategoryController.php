<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreCategory;
use App\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['categories'] = Category::all();
        $data['no'] = 1;
        $data['menu'] = 2;
        return view('backend.category.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.category.create', ['menu' => 2]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategory $request)
    {
        $validate = $request->validated();

        if($validate){
            $input = $request->toArray();
            $input['name'] = ucfirst($input['name']);
            Category::create($input);
            notifMsg('success', 'Success Add Category');
            
            return redirect()->route('category.index');
        }
    }

 
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['category'] = Category::find($id);
        $data['menu'] = 2;
        if($data['category']){
            return view('backend.category.edit', $data);
        } else {
            notifMsg('danger', 'Data Category Not Found!');
            return redirect()->route('category.index');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreCategory $request, $id)
    {
        $update = Category::find($id)->update($request->toArray());
        if($update) {
            notifMsg('success', 'Updating Data Category Success!');
            return redirect()->route('category.index');
        } else {
            notifMsg('danger', 'Delete Failed!');
            return redirect()->route('category.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Category::destroy($id);
        
        if($delete) {
            notifMsg('warning', 'Delete Success!');
            return redirect()->route('category.index');
        } else {
            notifMsg('danger', 'Delete Failed!');
            return redirect()->route('category.index');
        }
    }
}
