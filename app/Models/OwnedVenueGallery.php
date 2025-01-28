<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OwnedVenueGallery extends Model
{
    protected $fillable = [
        'owned_vanue_id',
        'file_path',
        'file_name',
    ];

    public function ownedVanue() {
        return $this->belongsTo(OwnedVenue::class);
    }
}
