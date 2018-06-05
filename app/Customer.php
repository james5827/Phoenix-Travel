<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Customer
 * @package App
 * @mixin \Eloquent
 */
class Customer extends Model
{
    protected $primaryKey = 'Customer_Id';
    public $incrementing = false;
    public $timestamps = false;

    protected $hidden = ['Password'];

    protected $fillable = [
        'Customer_Id',
        'First_Name',
        'Middle_Initial',
        'Last_Name',
        'Street_No',
        'Street_Name',
        'Suburb',
        'Postcode',
        'Email',
        'Password',
        'Phone',
        'AuthCustomer'
    ];

    public function tripBookings()
    {
        return $this->hasMany(TripBooking::class, 'Primary_Customer');
    }
}
