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

    public function images()
    {
        return $this->hasMany(Image::class);
    }

    public function car_dealership()
    {
        return $this->belongsTo(CarDealership::class);
    }

    public function modelo()
    {
        return $this->belongsTo(Modelo::class);
    }

    public function kind()
    {
        return $this->belongsTo(Kind::class);
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }
}
