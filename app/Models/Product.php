<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $dates = ['deleted_at'];
    public $timestamps = false;
    protected $fillable = ['name', 'price', 'quantity', 'description'];


    public function category(){
        return $this -> belongsTo(Category::class);
    }
}
