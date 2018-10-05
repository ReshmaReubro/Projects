<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    
    
    protected $fillable = [
        "name",
        "description",
        "image",
        "slug",
        "meta_description",
    
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
        return url('/admin/services/'.$this->getKey());
    }

    
}
