<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Collection;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'nama' => $faker->sentence(),
        'merk' => $faker->sentence(),
        'keterangan' => $faker->realText(2000)
    ];
});
