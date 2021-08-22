<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ad extends Model
{
    use HasFactory;

    protected $dates = ['deleted_at'];
    public $timestamps = false;

    protected $fillable = ['name', 'text', 'date'];

}
