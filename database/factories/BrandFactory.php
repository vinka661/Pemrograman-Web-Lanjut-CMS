<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Brand;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'nama' => $faker->sentence(),
        'keterangan' =>$faker->realText(2000),
        'gambar' => $faker->gambar('public/assets/img/laptop', 400, 300, null, false)
    ];
});
