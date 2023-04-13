<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favorites extends Model
{
    use HasFactory;

    protected $fillable = 
    [
        'feat_name',
        'skill_class',
        'weapon_name',
        'armor_name',
        'item_name',
    ];

    public function feats()
    {
        return $this->belongsTo(Feat::class, 'feat_name', 'feat_name');
    }

    public function skills()
    {
        return $this->belongsTo(Skills::class, 'skill_class', 'skill_class');
    }

    public function wps()
    {
        return $this->belongsTo(Weapons::class, 'weapon_name', 'weapon_name');
    }

    public function armors()
    {
        return $this->belongsTo(Armors::class, 'armor_name', 'armor_name');
    }

    public function items()
    {
        return $this->belongsTo(Items::class, 'item_name', 'item_name');
    }
}
