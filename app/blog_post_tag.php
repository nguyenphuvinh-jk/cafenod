<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class blog_post_tag extends Model
{
    protected $fillable = ['blog_post_id', 'blog_tag_id', 'created_at', 'updated_at'];
    
}
