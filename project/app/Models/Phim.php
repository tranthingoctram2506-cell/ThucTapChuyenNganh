<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Phim extends Model
{
    protected $table="phims";
    protected $fillable=['id','name'];
}
