<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    public function Service()
    {
    	return $this->belongsTo(Service::class);
    }

    public function RelatedWorkImage()
    {
    	return $this->hasMany(RelatedWorkImage::class);
    }

    public function RelatedWorkVideo()
    {
    	return $this->hasMany(RelatedWorkVideo::class);
    }

}
