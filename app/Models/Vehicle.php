<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;
    protected $fillable = [
        'car_dealership_id',
        'title',
        'brand_id',
        'model_id',
        'kind_id',
        'year',
        'transmition',
        'km',
        'description',
        'ac',
        'price',
        'offer',
        'highlight'
    ];
}
