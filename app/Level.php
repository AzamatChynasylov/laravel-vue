<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Level extends Model
{
	use SoftDeletes;
	//
	protected $guarded = [];
	
	protected $dates = ['deleted_at'];

		public function groups()
		{
			return $this->hasMany(Group::class);
		}
}
