<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';
    protected $guarded = [];

    public function replies()
    {
        return $this->hasMany(Comment::class, 'parent_id');
    }

    public function user(){
        return $this->belongsTo(User::class,'users_id');
    }
}
