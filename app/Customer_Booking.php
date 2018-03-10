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
    protected $primaryKey = ['Trip_Booking_No', 'Customer_Id'];
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [

    ];
}
