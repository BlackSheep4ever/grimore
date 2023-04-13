<?php

namespace App\Http\Controllers;

use App\Models\Weapons;
use App\Models\Wpn_Properties;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Response;

class WeaponsController extends Controller
{
    public function weapons()
    {
        $weapons = Weapons::all();
        $properties = Wpn_Properties::all();

        $weapon_type = $weapons->sortBy('weapon_type')->pluck('weapon_type')->unique();
        $damage = $weapons->sortBy('damage')->pluck('damage')->unique();
        $wpn = $properties->sortBy('wpn')->pluck('wpn')->unique();

        return view('tables.weapons', compact(
            'weapons',
            'weapon_type',
            'damage',
            'wpn',
            'properties',));
    }

    public function getData()
    {
        if (Auth::User()) {
            $data = Weapons::get(['weapon_name', 'weapon_type', 'damage', 'description', 'properties', 'cost', 'Weight',])->makeVisible(['weapon_name', 'weapon_type', 'damage', 'description', 'properties', 'cost', 'Weight',]);

            return Response::json(['data' => $data]);
        }
    }
}
