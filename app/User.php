<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;



/**
* 
*/
class User extends Model
{
    
    use Notifiable;

    protected $table='users';
    protected $primarykey='id';

    protected $fillable=[
        'username','email','password','profile_photo'
    ];

    protected $guarded=[
        'remember_token'
    ];

    
    protected $hidden=[
        'password','remember_token'
    ];



}


/*class User extends Authenticatable
{
    use Notifiable;

    
    protected $fillable = [
        'name', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}*/
