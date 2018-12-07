<?php

namespace Modules\Blog\Entities;

use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{

    protected $table = 'posts';

    protected $fillable = [
    	'title', 'content',
    ];
}