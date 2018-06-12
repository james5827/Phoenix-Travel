<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \App\Vehicle;
/**
 * Class Trip
 * @package App
 * @mixin \Eloquent
 */
class Trip extends Model
{
    protected $primaryKey = 'trip_id';
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'trip_id',
        'tour_no',
        'rego_no',
        'departure_date',
        'max_passengers',
        'standard_amount'
    ];

    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class, 'rego_no');
    }

    public function tour()
    {
        return $this->belongsTo(Tour::class, 'tour_no');
    }

    public function bookings()
    {
        return $this->hasMany(TripBooking::class, 'trip_id');
    }

    public function reviews()
    {
        return $this->hasMany(Review::class, 'trip_id');
    }
}
