<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Armors extends Model
{
    use HasFactory;

    protected $fillable =[
        'armor_name',
        'armor_type',
        'class_armor',
        'requirements',
        'description',
        'penalty',
        'cost',
        'Weight',
    ];
}
