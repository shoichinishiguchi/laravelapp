<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */
use App\Model;
use App\Person;
use Faker\Generator as Faker;
use Illuminate\Support\Str;


$factory->define(App\Person::class, function(Faker\Generator $faker){
    return[
        'name' => $faker->name,
        'mail' => $faker->safeEmail,
        'age' => random_int(1,99),
    ];
});
