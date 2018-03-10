<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Staff
 * @package App
 * @mixin \Eloquent
 */
class Staff extends Model
{
    protected $primaryKey = 'Staff_No';
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [

    ];
}
