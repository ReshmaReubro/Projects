<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    
    
    protected $fillable = [
        "service_id",
        "name",
        "description",
        "slug",
        "meta_description",
        "image",
        "featured",
    
    ];
    
    protected $hidden = [
    
    ];
    
    protected $dates = [
        "created_at",
        "updated_at",
    
    ];
    
    
    
    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute() {
        return url('/admin/works/'.$this->getKey());
    }

    
}
