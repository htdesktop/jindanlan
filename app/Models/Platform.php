<?php

namespace jindanlan\Models;

use Illuminate\Database\Eloquent\Model;

class Platform extends Model
{
    //
		public function platform_levels(){
    	return $this->hasMany('jindanlan\Models\PlatformLevel','platform_id','id');
    }
}
