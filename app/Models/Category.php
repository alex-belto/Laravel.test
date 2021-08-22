<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Category extends Model
{
    protected $dates = ['deleted_at'];
    public $timestamps = false;

    protected $table = 'categories';

    public function products(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this -> hasMany(Product::class);
    }

    public function events(){
        return $this->hasManyThrough(Event::class, Product::class);
    }

    public function ads(){

        return $this -> hasMany(Ad::class);
    }
}
