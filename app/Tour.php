<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tour
 * @package App
 * @mixin \Eloquent
 */
class Tour extends Model
{
    protected $primaryKey = 'Tour_no';
    public $incrementing = false;

    public function trips()
    {
        return $this->hasMany(Trip::class, 'Tour_No');
    }
}
