<?php

namespace Database\Seeders;

use App\Models\Car;
use App\Models\Contact;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
//        // Car::factory(10)->create();
//        Car::factory('cars')->insert([
//            'name_cars' => Str::random(10),
//        ]);

        /*DB::table('contacts')->insert([
            'name' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'subject' => Str::random(10),
            'message' => Str::random(10),
            ]);*/
        Contact::factory(50)->create();
        // Car::factory(50)->create();
    }
}
