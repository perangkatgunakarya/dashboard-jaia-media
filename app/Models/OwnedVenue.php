<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class OwnedVenue extends Model
{
    use HasUuids;

    protected $casts = [
        'galleries' => 'array'
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    protected $fillable = [
        'name',
        'slug',
        'logo_url',
        'jumbotron_url',
        'overview_text',
        'overview_image_url',
        'galleries',
        'monthly_customer',
        'daily_revenue',
    ];

    public function testimonials()
    {
        return $this->hasMany(OwnedVenueTestimonial::class);
    }
}
