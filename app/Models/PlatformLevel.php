<?php

namespace jindanlan\Models;

use Illuminate\Database\Eloquent\Model;

class PlatformLevel extends Model
{
    //
	 protected $table = 'platform_levels';

	 public function platform(){
    	return $this->belongsTo('jindanlan\Models\Platform','platform_id','id');
   }
}
