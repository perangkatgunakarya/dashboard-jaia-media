<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Client extends Model
{
    use HasUuids, SoftDeletes;

    protected $fillable = [
        'name',
        'logo_url',
        'background_url',
        'socmed_url',
        'description'
    ];

    public function segments() {
        return $this->belongsToMany(Segment::class, 'client_segment')->withTimestamps();
    }
}
