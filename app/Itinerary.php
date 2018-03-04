<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Itinerary
 * @package App
 * @mixin \Eloquent
 */
class Itinerary extends Model
{
    protected $primaryKey = ['Tour_No', 'Day_No'];
    public $incrementing = false;
}
