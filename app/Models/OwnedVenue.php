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
        'years_of_expertise',
        'successful_campaigns',
        'served_clients',
        'positive_testimonials',
    ];

    public function contacts()
    {
        return $this->hasMany(OwnedVenueContact::class);
    }

    public function statistic()
    {
        return $this->hasOne(OwnedVenueStatistic::class);
    }

    public function galleries()
    {
        return $this->hasMany(OwnedVenueGallery::class);
    }
}
