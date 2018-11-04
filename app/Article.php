<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = ['title', 'date', 'content', 'keywords', 'cover', 'user_id', 'clicks'];


}
