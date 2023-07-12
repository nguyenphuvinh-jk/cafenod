<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class blog_post extends Model
{
    public function tags()
    {
        return $this->belongsToMany('App\blog_tag', 'blog_post_tags')->withTimestamps();
    }

    public function categories()
    {
        return $this->belongsToMany('App\blog_category', 'blog_category_posts')->withTimestamps();
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
