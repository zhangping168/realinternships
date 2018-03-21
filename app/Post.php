<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
	protected $table="posts";

	public function hasManyLikes(){
		return $this->hasMany('App\Like','post_id','id');
	}

	public function category(){
		return $this->belongsTo('App\Category','category_id', 'id');
	}
}
