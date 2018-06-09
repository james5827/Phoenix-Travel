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
    protected $primaryKey = 'customer_id';
    public $incrementing = false;
    public $timestamps = false;

    protected $hidden = ['password'];

    protected $fillable = [
        'customer_id',
        'first_name',
        'middle_initial',
        'last_name',
        'street_no',
        'street_name',
        'suburb',
        'postcode',
        'email',
        'password',
        'phone',
        'authcustomer'
    ];

    public function tripBookings()
    {
        return $this->hasMany(TripBooking::class, 'primary_customer');
    }
}
