<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Contact;

class CarAddContactController extends Controller
{
    public function CarAddContact($id) {

        $contact = new Contact (['user_id' => '']);
        $car = Car::find($id);
        $car->contacts()->save($contact);
    }


}
