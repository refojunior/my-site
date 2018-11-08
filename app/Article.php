<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{
	use SoftDeletes;

    protected $fillable = ['id','title', 'date', 'content', 'keywords', 'cover', 'user_id', 'clicks'];
    protected $dates = ['deleted_at'];
   
}
