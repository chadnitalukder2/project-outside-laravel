<?php
require_once 'vendor/autoload.php';
use Illuminate\Database\Capsule\Manager as DB;

DB::schema()->dropIfExists('posts');
   


DB::schema()->create('posts', function ($table) {
    $table->increments('id');
    $table->string('title');
    $table->string('details')->unique();
    $table->timestamps();
});

?>