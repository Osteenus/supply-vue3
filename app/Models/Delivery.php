<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Delivery extends Model
{
    use HasFactory;

    protected $fillable = [
        'shipping_date',
        'location_from',
        'status',
        'order_number',
        'number_of_locations',
    ];
}
