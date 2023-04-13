<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wpn_Properties extends Model
{
    use HasFactory;

    protected $fillable = [
        'property_name',
    ];
}
