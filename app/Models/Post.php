<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';
    protected $guarded = [];

    public function keywords(){
        return $this->belongsToMany(Keywords::class, 'post_keywords', 'post_id', 'keywords_id');
    }
    public function albums(){
        return $this->belongsToMany(Album::class, 'post_albums', 'post_id', 'albums_id');
    }

    public function user(){
        return $this->belongsTo(User::class,'users_id');
    }

}
