<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'condition'=>1,
        'seller_id'=>1,
        'client_name'=>$faker->name,
        'client_short_name'=>$faker->name,
        'reg_name'=>$faker->RUC,
        'reg_number'=>$faker->number,
        'address'=>$faker->addres,
        'zone1'=>$faker->state,
        'zone2'=>$faker->state,
        'zone3'=>$faker->state,
        'zone4'=>$faker->state,
        'zipcode'=>$faker->zipcode,
        'pluscode'=>$faker->pluscode,
        'latitud'=>$faker->float,
        'longitud'=>$faker->float,
        'job_position'=>$faker->position,
        'phone1'=>$faker->phone,
        'phone2'=>$faker->phone,
        'email'=>$faker->email,
        'contact_id'=>1,
        'created_at'=>$faker->date,
        'updated_at'=>$faker->date,
        'aniversary_at'=>$faker->date,
        'currency_id'=>1,
        'credit_term_id'=>1,
        'observation'=>$faker->sentense,
        'category_id'=>1,

    ];
});
