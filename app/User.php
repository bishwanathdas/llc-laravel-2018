<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class User extends Model
{
    
    use Notifiable;
    protected $guarded = [
        'remember_token'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}