<?php

namespace Builder\StableBuilder;

use Illuminate\Support\Facades\Auth;
use RuliLG\StableDiffusion\Models\StableDiffusionResult;
use RuliLG\StableDiffusion\StableDiffusion;
use RuliLG\StableDiffusion\Prompt;
use Illuminate\Http\Request;

class StableDiffusionBuilder
{
    public function withModifiers()
    {

        $select_options = array(
            array(
                'name' => 'realistic()',
                'value' => 'realistic',
            ),
            array(
                'name' => 'hyperrealistic()',
                'value' => 'hyperrealistic',
            ),
            array(
                'name' => 'conceptArt()',
                'value' => 'concept art',
            ),
        );
        
        return view('dashboard', [
            'select_options' => $select_options,
        ]);
    }
}