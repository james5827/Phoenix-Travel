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
    protected $primaryKey = ['Trip_Id', 'Customer_Id'];
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [

    ];
}
