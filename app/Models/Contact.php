<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Contact extends Model
{
    use HasFactory;
    /*protected $table="contacts";*/

    /*public function car(): HasOne {
        return $this->belongsTo(Car::class);
    }*/
    public function car() {
        return $this->hasMany(Car::class);
    }
}
