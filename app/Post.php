<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // to change table name 
    protected $table = 'posts';
    // Primary Key
    protected $primaryKey = 'id';
    // Timestamps
    public $timestamps = true;
}
