<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class OwnedVenueContact extends Model
{
    use HasUuids;

    protected $fillable = [
        'owned_bussiness_id',
        'contact_type',
        'contact_value',
    ];

    public function ownedVenue() {
        return $this->belongsTo(OwnedVenue::class);
    }
}
