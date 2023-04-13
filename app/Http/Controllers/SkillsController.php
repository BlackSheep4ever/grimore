<?php

namespace App\Http\Controllers;

use App\Models\Background;
use App\Models\Classes;
use App\Models\Skills;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Response;

class SkillsController extends Controller
{
    public function skills()
    {
        $skills = Skills::all();
        $backGround = Background::all();
        $classes = Classes::all();

        $attribute = $skills->sortBy('attribute')->pluck('attribute')->unique();
        $skill_class = $skills->sortBy('skill_class')->pluck('skill_class')->unique();
        $bg = $backGround->sortBy('bg')->pluck('bg')->unique();
        $class_n = $classes->sortBy('Class_n')->pluck('Class_n')->unique();

        return view('tables.skills', compact(
            'skills',
            'attribute',
            'skill_class',
            'bg',
            'backGround',
            'class_n',
            'classes',
        ));
    }

    public function getData()
    {
        if (Auth::User()) {
            $data = Skills::get(['skill_name', 'attribute', 'description', 'skill_class', 'skill_background',])->makeVisible(['skill_name', 'attribute', 'description', 'skill_class', 'skill_background',]);

            return Response::json(['data' => $data]);
        }
    }
}
