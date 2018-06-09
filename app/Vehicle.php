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
    protected $primaryKey = 'rego_no';
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'rego_no',
        'vin',
        'make',
        'model',
        'year',
        'capacity',
        'fuel_type',
        'equipment',
        'license_required'
    ];

    public function trips()
    {
        return $this->hasMany(Trip::class, 'rego_no');
    }
}
