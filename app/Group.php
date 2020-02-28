<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Group extends Model
{
		use SoftDeletes;
		//
		protected $guarded = [];
		
		protected $dates = ['deleted_at'];

		public function level()
		{
			return $this->belongsTo(Level::class);
		}

		public function children() 
		{
      return $this->hasMany(self::class, 'parent_id');
    }
}
