<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Segment extends Model
{
    use HasUuids, SoftDeletes;

    protected $fillable = [
        'name',
    ];

    public function clients() {
        $this->belongsToMany(Client::class, 'clients', 'client_id');
    }
}
