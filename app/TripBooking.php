<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TripBooking
 * @package App
 * @mixin \Eloquent
 */
class TripBooking extends Model
{
    protected $primaryKey = 'Trip_Booking_No';
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'Trip_Booking_No',
        'Trip_Id',
        'Primary_Customer',
        'Booking_Date',
        'Deposit_Amount'
    ];
}
