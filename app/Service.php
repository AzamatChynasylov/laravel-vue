<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
	protected $guarded = [];
		//
		public function transactions()
		{
			return $this->hasMany(Transaction::class);
		}
}
