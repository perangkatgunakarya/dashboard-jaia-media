<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    use HasUuids;

    protected $table = 'home';

    protected $fillable = [
        'years_of_expertise',
        'successful_campaigns',
        'served_clients',
        'positive_testimonials',
    ];
}
