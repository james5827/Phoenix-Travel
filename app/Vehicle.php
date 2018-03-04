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
}
