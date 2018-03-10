<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Itinerary
 * @package App
 * @mixin \Eloquent
 */
class Itinerary extends Model
{
    protected $primaryKey = ['Tour_No', 'Day_No'];
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'Tour_No',
        'Day_No',
        'Hotel_Booking_No',
        'Activities',
        'Meals'
    ];
}
