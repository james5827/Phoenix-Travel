<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Customer_Review
 * @package App
 * @mixin \Eloquent
 */
class Customer_Review extends Model
{
    protected $primaryKey = ['trip_id', 'customer_id'];
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [

    ];
}
