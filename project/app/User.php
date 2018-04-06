<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
/*    protected $fillable = [
        'username', 'email', 'password',
    ];*/

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
/*    protected $hidden = [
        'password', 'remember_token',
    ];*/


    protected $hidden = [
        'password',
        'remember_token'
    ];

    protected $fillable = [
        'username',
        'email',
        'password',
        'remember_token'
    ];

    public function employer()
    {
        return $this->hasOne(\App\Models\Employer::class, 'e_id');
    }

    public function insureds()
    {
        return $this->hasMany(\App\Models\Insured::class, 'users_id');
    }

}
