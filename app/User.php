<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'api_token',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    //commands "hasMany" digunakan untuk membuat relasi antar table yang telah ter FOREIGN KEY dengan nilai MANY TO ONE.

    /** PENJELASAN CODE :
     * Membuat public function dengan endpoint user. kemudian, model User yang berasal dr table "users" akan direlasikan ke table "quotes" dengan perintah 'hasMany' (Many to One) dan ditunjukkan ke model Quote
     */
    public function quote(){
        return $this->hasMany(Quote::class);
    }
}
