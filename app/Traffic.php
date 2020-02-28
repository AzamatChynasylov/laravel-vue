<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Traffic extends Model
{
	
	protected $guarded = [];
		//
		public function admission()
		{
			return $this->belongsToMany(Admission::class);
		}
}
