<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SocialMedia extends Model
{
    use HasFactory;
    protected $fillable = [
        'car_dealership_id',
        'instagram',
        'twitter',
        'facebook'

    ];

    protected $table = "social_medias";
    public function car_dealership()
    {
        return $this->belongsTo(CarDealership::class);
    }
}
