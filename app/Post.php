<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Comment;

class Post extends Model
{
    protected $table = 'posts';

    public $primaryKey = 'id';
    
    public $timestamps = true;

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class)->orderBy('created_at', 'desc');
        
    }

   
    // public function addName($name)
    // {
    //     $this->comments()->create(compact('name',));
    // } 
    
    // public function addComment($body)
    // {
    //     $this->comments()->create(compact('body'));
    // }

}
