<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Vehicle
 * @package App
 *
 * @mixin \Eloquent
 */
class Vehicle extends Model
{
    protected $primaryKey = 'Rego_No';
    public $incrementing = false;

    protected $fillable = [
        'Rego_No',
        'VIN',
        'Make',
        'Model',
        'Year',
        'Capacity',
        'Fuel_Type',
        'Equipment',
        'License_Required'
    ];

    public function trips()
    {
        return $this->hasMany(Trip::class, 'Rego_No');
    }
}
