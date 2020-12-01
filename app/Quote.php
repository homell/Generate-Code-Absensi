<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    protected $guarded = []; 

    //command belongsTo digunakan untuk relasi table bernilai ONE TO MANY ke table yang telah ter FOREIGN KEY 

    /** PENJELASAN CODE :
     * Membuat public function dengan endpoint user. kemudian, model Quote yang berasal dr table "quotes" akan direlasikan ke table "users" dengan perintah 'belongsTo'(One to Many) dan ditunjukkan ke model User
     */
    public function user(){
        return $this->belongsTo(User::class);
    }
}
