<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
		//
		public function admission()
		{
			return $this->belongsTo(Admission::class);
		}
}
