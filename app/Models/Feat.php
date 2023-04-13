<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Jetstream\HasProfilePhoto;

class Feat extends Model
{
    use HasFactory;
    use HasProfilePhoto;

    protected $fillable = [
        'feat_name',
        'requirements',
        'description',
        'source',
        'tag',
    ];

    protected $appends = [
        'profile_photo_url',
    ];
}
