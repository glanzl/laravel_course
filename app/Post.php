<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    // if the class is call Post, LV assumes that you have a table posts
    // if your table is named differently you must assign a new value to the variable table
    // ie protected $table = 'comment_posts';
    // default: protected $table = 'posts'; protected $primaryKey = 'id';
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    
    protected $fillable = [
        'title',
        'content'
    ]; 
}
