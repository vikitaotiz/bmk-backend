<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function property_category()
    {
        return $this->belongsTo(PropertyCategory::class);
    }

    public function address()
    {
        return $this->belongsTo(Address::class);
    }
}
