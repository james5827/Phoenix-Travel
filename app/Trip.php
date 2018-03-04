<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Trip
 * @package App
 * @mixin \Eloquent
 */
class Trip extends Model
{
    protected $primaryKey = 'Trip_Id';
    public $incrementing = false;
}
