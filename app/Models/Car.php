<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    public function contact() {

        return $this->belongsTo(Contact::class);

         // return $this->hasOne(Contact::class);

        // return $this->belongsTo(Contact::class, 'user_id', 'id');
        // return $this->hasMany('App\Contact', 'user_id', 'id');


        /*$users = Car::find(1)->users;
        foreach ($users as $user) {
            //
        }*/
    }

}
