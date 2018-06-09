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
    protected $primaryKey = 'tour_no';
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'tour_no',
        'tour_name',
        'description',
        'duration',
        'route_map'
    ];

    public function trips()
    {
        return $this->hasMany(Trip::class, 'tour_no');
    }

    public function itineraries()
    {
        return $this->hasMany(Itinerary::class, 'tour_no');
    }
}
