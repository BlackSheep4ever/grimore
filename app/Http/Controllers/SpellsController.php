<?php

namespace App\Http\Controllers;

use App\Models\Spells;
use Illuminate\Http\Request;

class SpellsController extends Controller
{
    public function spells()
    {
        $spells = Spells::all();

        $spell_level = $spells->sortBy('spell_level')->pluck('spell_level')->unique();
        $spell_class = $spells->sortBy('spell_class')->pluck('spell_class')->unique();
        $spell_school = $spells->sortBy('spell_school')->pluck('spell_school')->unique();
        $casting_time = $spells->sortBy('casting_time')->pluck('casting_time')->unique();
        $range = $spells->sortBy('range')->pluck('range')->unique();
        $duration = $spells->sortBy('duration')->pluck('duration')->unique();
        $components = $spells->sortBy('components')->pluck('components')->unique();
        $spell_class = $spells->sortBy('spell_class')->pluck('spell_class')->unique();
        $source = $spells->sortBy('source')->pluck('source')->unique();

        return view('tables.spells', compact(
            'spells',
            'spell_level',
            'spell_class',
            'spell_school',
            'casting_time',
            'range',
            'duration',
            'components',
            'spell_class',
            'source',));
    }
}
