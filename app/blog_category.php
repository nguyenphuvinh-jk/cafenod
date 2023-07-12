<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class blog_category extends Model
{
    public function posts(){
        return $this->belongsToMany('App\blog_post', 'blog_category_posts')->paginate(2);
    }

    public function all_posts(){
        return $this->belongsToMany('App\blog_post', 'blog_category_posts');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
