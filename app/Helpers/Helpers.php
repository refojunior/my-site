<?php 

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
        'keywords' => $request->keywords,
        'cover' => $fileName,
        'user_id' => Auth::user()->id
	];
}

//resize image upload cover
function resize($image){
    $img = Image::make('storage/cover/'.$image);
    $img->resize(350, null, function($constraint){
        $constraint->aspectRatio();
    });
    $img->save('storage/cover/resize/'.$image);
    return $img;
}



?>