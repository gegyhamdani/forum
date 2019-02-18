<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posting extends Model
{
    protected $table = 'postings';

    public function comments() {
		return $this->hasMany('App\Subforum', 'posting_id', 'posting_id');
	}

    public function user() {
		return $this->hasOne('App\User', 'member_id', 'member_id');
	}
}
