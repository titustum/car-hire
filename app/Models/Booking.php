<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $fillable = [
        'booking_id',
        'car_id',
        'fullname',
        'phone',
        'hire_duration',
        'total_price',
        'status',
        'status_state',
        'booked_to',
        'car_price',
        'car_name',
    ];
}
