<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Phim extends Model
{
    protected $table="phims";
    protected $fillable=['id','name','image','description','content','price','status','category_id'];
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
}
