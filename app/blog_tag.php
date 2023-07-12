<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class blog_tag extends Model
{
    public function posts(){
        return $this->belongsToMany('App\blog_post', 'blog_post_tags')->paginate(2);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
