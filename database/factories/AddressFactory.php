<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models;
use Faker\Generator as Faker;
use App\Models\Address;
use Illuminate\Support\Facades\Date;

$addresses = [
    ["北京市", "市辖区", "东城区"],
    ["河北省", "石家庄市", "长安区"],
    ["江苏省", "南京市", "浦口区"],
    ["江苏省", "苏州市", "相城区"],
    ["广东省", "深圳市", "福田区"],
];
$address = $addresses[array_rand($addresses)];
$factory->define(Address::class, function (Faker $faker) use ($address) {
    return [
        //
        'province_name' => $address[0],
        'city_name'     => $address[1],
        'district_name' => $address[2],
        'strict'        => $faker->address,
        'phone'         => $faker->phoneNumber,
        'contact_name'  => $faker->name,
        'created_at' =>Date::yesterday(),
        'updated_at' => Date::now()
    ];
});
