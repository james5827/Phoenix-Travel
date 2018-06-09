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
    protected $primaryKey = ['tour_no', 'day_no'];
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'tour_no',
        'day_no',
        'hotel_booking_no',
        'activities',
        'meals'
    ];

    public function tour()
    {
        return $this->belongsTo(Tour::class, 'tour_no');
    }
}
