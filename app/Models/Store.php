<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Store extends Model implements HasMedia
{
    use InteractsWithMedia;
    
    protected $fillable = ['name', 'description', 'address_details', 'place_id'];

    public function place()
    {
        return $this->belongsTo(Place::class);
    }
}
