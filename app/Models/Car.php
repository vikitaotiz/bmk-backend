<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function car_category()
    {
        return $this->belongsTo(CarCategory::class);
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }
}
