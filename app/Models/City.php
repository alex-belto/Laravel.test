<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;
    protected $dates = ['deleted_at'];
    public $timestamps = false;

    public function sights()
    {
        return $this -> hasMany(Sight::class);
    }

}
