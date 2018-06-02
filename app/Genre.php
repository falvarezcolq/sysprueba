<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    //
    protected $tables = "genres";

    protected $fillable = ['genre'];
}
