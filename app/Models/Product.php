<?php

namespace jindanlan\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
	  public function scopePopular($query)
    {
        return $query->where('start_investment_amount', '>', 100);
    }
}
