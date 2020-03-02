<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Admission extends Model
{
		//
		use SoftDeletes;
		protected $guarded = [];
		protected $dates = ['deleted_at'];

		public function traffic()
		{
			return $this->belongsToMany(Traffic::class);
		}
		public function phones()
		{
			return $this->hasMany(Phone::class);
		}
}
