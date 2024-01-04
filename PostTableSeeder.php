<?php

require_once 'vendor/autoload.php';

$faker = Faker\Factory::create();

for ($i = 0; $i < 3; $i++) {
    Post::create([
        'title'=>$faker->text(),
        'details'=>$faker->sentence()
        
    ]);
   
}


?>