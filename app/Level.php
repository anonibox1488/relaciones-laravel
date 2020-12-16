<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
 	public function users()
   	{
   		return $this->hasMany(User::class);
   	}  

   	public function post()
    {
        return $this->hasManyThrough(Post::class, User::calss);
    }

    public function videos()
    {
        return $this->hasManyThrough(Video::class,User::calss);
    } 
}
