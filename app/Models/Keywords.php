<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Keywords extends Model
{
    protected $table = 'keywords';
    protected $guarded = [];

    public function posts(){
        return $this->belongsToMany(Post::class, 'post_keywords', 'keywords_id','post_id',);
    }

    public function user(){
        return $this->belongsTo(User::class,'users_id');
    }

}
