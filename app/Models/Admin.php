<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

use Illuminate\Notifications\Notifiable;

use Illuminate\Database\Eloquent\Model;

class Admin extends Authenticatable
{
    use Notifiable;

    protected $table = 'admins';
    protected $guarded = array();

    protected $fillable = ['first_name', 'last_name', 'email', 'password', 'activation', 'image'];
}
