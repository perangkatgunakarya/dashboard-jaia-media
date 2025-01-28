<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class Segment extends Model
{
    use HasUuids;

    protected $fillable = [
        'name',
    ];

    public function clients() {
        return $this->belongsToMany(Client::class, 'client_segment')->withTimestamps();
    }
}
