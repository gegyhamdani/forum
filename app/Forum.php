<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Forum extends Model
{
    protected $table = 'forums';
    
    protected $fillable = [
        'no',
        'forum_id',
        'forum_name',
        'created_at',
        'updated_at'
    ];


	public function subforums() {
		return $this->hasMany('App\Subforum', 'forum_id', 'forum_id');
	}
}
