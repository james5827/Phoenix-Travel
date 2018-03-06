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

    public function vehicle()
    {
        return $this->hasOne(Vehicle::class, 'Rego_No');
    }

    public function tour()
    {
        return $this->hasOne(Tour::class, 'Tour_No');
    }
}
