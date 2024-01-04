<?php
require_once 'vendor/autoload.php';
use Illuminate\Database\Capsule\Manager as DB;

DB::schema()->dropIfExists('users');
   


DB::schema()->create('users', function ($table) {
    $table->increments('id');
    $table->string('name');
    $table->string('email')->unique();
    $table->timestamps();
});

?>