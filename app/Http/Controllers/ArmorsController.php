<?php

namespace App\Http\Controllers;

use App\Models\Armors;
use Illuminate\Http\Request;

class ArmorsController extends Controller
{
    public function armors()
    {
        $armors = Armors::all();

        $armor_type = $armors->sortBy('armor_type')->pluck('armor_type')->unique();
        $class_armor = $armors->sortBy('class_armor')->pluck('class_armor')->unique();
        $requirements = $armors->sortBy('requirements')->pluck('requirements')->unique();
        $penalty = $armors->sortBy('penalty')->pluck('penalty')->unique();

        return view('tables.armors', compact(
            'armors',
            'armor_type',
            'class_armor',
            'requirements',
            'penalty',));
    }
}
