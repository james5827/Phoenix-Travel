<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Customer_Booking
 * @package App
 * @mixin \Eloquent
 */
class Customer_Booking extends Model
{
    protected $primaryKey = ['trip_booking_no', 'customer_id'];
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [

    ];
}
