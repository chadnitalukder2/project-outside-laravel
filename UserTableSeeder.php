<?php

require_once 'vendor/autoload.php';

use Illuminate\Database\Capsule\Manager as DB;

$faker = Faker\Factory::create();

for ($i = 0; $i < 3; $i++) {
    DB::table('users')->insert([
        'name'=>$faker->name,
        'email'=>$faker->safeEmail()
        
    ]);
}


?>