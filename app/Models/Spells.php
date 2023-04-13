<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spells extends Model
{
    use HasFactory;

    protected $fillable = [
        'spell_class',
        'spell_level',
        'spell_name',
        'spell_school',
        'casting_time',
        'range',
        'duration',
        'components',
        'description',
        'source',
        'tag',
    ];

    protected $appends = [
        'profile_photo_url',
    ];
}
