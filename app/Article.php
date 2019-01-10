<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    // mass assigned
    // Fields inside the $fillable property can be mass assigned using Eloquent’s create() and update() methods. You can also use the $guarded property, to allow all but a few properties.
    protected $fillable = ['title', 'body'];
}
