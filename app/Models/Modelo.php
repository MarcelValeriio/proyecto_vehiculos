<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modelo extends Model
{
    use HasFactory;
    protected $fillable = [
        'brand_id',
        'model',
    ];

    public function vehicle()
    {
        return $this->hasMany(Vehicle::class);
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }
}
