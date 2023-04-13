<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skills extends Model
{
    use HasFactory;

    protected $fillable = [
        'skill_name',
        'attribute',
        'description',
        'skill_class',
        'skill_background'
    ];

}
