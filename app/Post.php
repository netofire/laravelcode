<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
      'title',
      'content'
    ];
    
    public function comments()
    {
        return $this->hasMany(Coment::class);
    }
    
    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'tags_posts');
    }
}
