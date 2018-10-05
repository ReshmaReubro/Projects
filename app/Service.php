<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    public function Work()
    {
    	return $this->hasMany(Work::class);
    }
}
