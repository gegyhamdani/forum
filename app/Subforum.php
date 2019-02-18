<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subforum extends Model
{
	protected $table = 'subforums';

	public function forums()
    {
        return $this->belongsTo(Forum::class);
    }
}
