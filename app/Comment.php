<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';

	public function forums()
    {
        return $this->belongsTo(Posting::class);
    }

    public function user() {
		return $this->hasOne('App\User', 'member_id', 'member_id');
	}
}
