<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;
    protected $fillable = [
        'type',
        'brand',
        'model',
        'price',
        'year',
        'color',
        'description',
        'image'
    ];
}
