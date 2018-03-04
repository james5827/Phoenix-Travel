<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Trip_Booking
 * @package App
 * @mixin \Eloquent
 */
class Trip_Booking extends Model
{
    protected $primaryKey = 'Trip_Booking_No';
    public $incrementing = false;
}
