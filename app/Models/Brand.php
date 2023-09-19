<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;
    protected $fillable = [
        'brand'
    ];

    public function vehicle()
    {
        return $this->hasMany(Vehicle::class);
    }

    public function modelo()
    {
        return $this->hasMany(Modelo::class);
    }
}
