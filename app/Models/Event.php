<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model{
    use HasFactory;

    protected $dates = ['deleted_at'];
    public $timestamps = false;

    public function category(){
        return $this->hasManyThrough(Category::class, Product::class);
    }

    public function products(){
        return $this -> belongsTo(Product::class);
    }

}
