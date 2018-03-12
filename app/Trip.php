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
    protected $primaryKey = 'Trip_Id';
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'Trip_Id',
        'Tour_No',
        'Rego_No',
        'Departure_Date',
        'Max_Passengers',
        'Standard_Amount'
    ];

    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class, 'Rego_No');
    }

    public function tour()
    {
        return $this->belongsTo(Tour::class, 'Tour_No');
    }

    public function tripBookings()
    {
        return $this->hasMany(TripBooking::class, 'Trip_Id');
    }
}
