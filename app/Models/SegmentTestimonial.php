<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class SegmentTestimonial extends Model
{
    use HasUuids;

    protected $fillable = [
        'segment_id',
        'name',
        'origin',
        'rating',
        'testimonial',
    ];

    public function segment() {
        return $this->belongsTo(Segment::class);
    }
}
