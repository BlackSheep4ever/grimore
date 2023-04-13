<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Weapons extends Model
{
    use HasFactory;

    protected $fillable =[
        'weapon_name',
        'weapon_type',
        'damage',
        'description',
        'properties',
        'cost',
        'Weight',
    ];
}
