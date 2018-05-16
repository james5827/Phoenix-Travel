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
    protected $primaryKey = 'id';
    protected $table = 'users';
    public $incrementing = false;
    public $timestamps = false;

    protected $guarded = [

    ];
}
