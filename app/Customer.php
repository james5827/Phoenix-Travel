<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Customer
 * @package App
 * @mixin \Eloquent
 */
class Customer extends Model
{
    protected $primaryKey = 'Customer_Id';
    public $incrementing = false;
}
