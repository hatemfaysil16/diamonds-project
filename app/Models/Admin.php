<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Admin extends Authenticatable implements HasMedia
{
    use InteractsWithMedia;
    use Notifiable;

    protected $table = 'admins';
    protected $guarded = array();

    protected $fillable = ['first_name', 'last_name', 'email', 'password', 'activation', 'image'];
}
