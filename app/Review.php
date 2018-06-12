<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $primaryKey = ['trip_id', 'customer_id'];
    protected $table = 'customer_reviews';
    public $incrementing = false;
    public $timestamps = false;

    protected $guarded = [

    ];
}
