<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Preference extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'relationship_ltr' => 'boolean',
        'relationship_marriage' => 'boolean',
        'relationship_tantric' => 'boolean',
        'relationship_polyamorous' => 'boolean',
        'relationship_open' => 'boolean',
        'relationship_celibate' => 'boolean',
        'relationship_celibate_marriage' => 'boolean',
        'relationship_casual' => 'boolean',
        'relationship_friends' => 'boolean',
        'relationship_travel' => 'boolean',
        'relationship_pen_pals' => 'boolean',
        'relationship_curious' => 'boolean',
        'relationship_other' => 'boolean',
    ];
}
