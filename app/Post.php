<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Post extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'body', 'views'
    ];
	
	public function comments()
	{
      return $this->hasMany(Comment::class);
	}

	public function user ()
	{
      return $this->belongsTo(User::class);
	}

}


