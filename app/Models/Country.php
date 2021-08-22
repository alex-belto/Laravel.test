<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;
    protected $dates = ['deleted_at'];
    public $timestamps = false;

    public function cities(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this -> hasMany(City::class);
    }
}
