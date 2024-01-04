<?php
use Illuminate\Database\Eloquent\Model as Model;
class Post extends Model{

    protected $table = 'posts';
    
    protected $fillable =
    [
        'title',
        'details'
    ];

}


?>