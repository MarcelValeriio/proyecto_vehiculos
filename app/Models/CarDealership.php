<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarDealership extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'rif',
        'address',
        'description'

    ];
    protected $table = "car_dealerships";
    public function vehicles()
    {
        return $this->hasMany(Vehicle::class);
    }

    public function social()
    {
        return $this->hasMany(SocialMedia::class);
    }
}
