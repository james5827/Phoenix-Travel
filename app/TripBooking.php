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
    protected $primaryKey = 'trip_booking_no';
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'trip_booking_no',
        'trip_id',
        'primary_customer',
        'booking_date',
        'deposit_amount'
    ];

    public function trip()
    {
        return $this->belongsTo(Trip::class, 'trip_id');
    }

    public function primaryCustomer()
    {
        return $this->belongsTo(Customer::class, 'primary_customer');
    }

    public function customers()
    {
        return $this->belongsToMany(Customer::class, 'customer_bookings','trip_booking_no','customer_id');
    }
}
