<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Models\Medecin::class, function (Faker $faker) {
    return [
        'firstname' =>$faker->ean8,
        'lastname' =>$faker->unique()->lastname,
        'age' =>$faker->buildingNumber,
        'adress' =>$faker->address,
        'tlfn' =>$faker->phoneNumber,
        'patient_id' => function() {
            
        return App\Models\Medecin::find()->random();

        }
    ];
});
