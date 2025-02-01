<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class OwnedVenueTestimonial extends Model
{
    use HasUuids;

    protected $fillable = [
        'owned_venue_id',
        'name',
        'origin',
        'rating',
        'testimonial',
    ];

    public function ownedVenue()
    {
        return $this->belongsTo(OwnedVenue::class);
    }
}
