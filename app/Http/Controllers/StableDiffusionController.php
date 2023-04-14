<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use RuliLG\StableDiffusion\Models\StableDiffusionResult;
use RuliLG\StableDiffusion\StableDiffusion;
use RuliLG\StableDiffusion\Prompt;
use Illuminate\Http\Request;
use RuliLG\StableDiffusion\Traits\HasFinishingTouches;
use RuliLG\StableDiffusion\Traits\HasPaintingStyles;
use RuliLG\StableDiffusion\Traits\HasAuthors;
use RuliLG\StableDiffusion\Traits\HasCanvases;

class StableDiffusionController extends Controller
{

    // public function generateImg()
    // {
    //     $stable =StableDiffusion::make()
    //         ->withPrompt(
    //             Prompt::make()
    //                 ->with('a panda sitting on the streets of New York after a long day of walking')
    //                 ->photograph()
    //                 ->resolution8k()
    //                 ->trendingOnArtStation()
    //                 ->highlyDetailed()
    //                 ->dramaticLighting()
    //                 ->octaneRender()
    //         )
    //         ->generate(1);

    //         dd($stable);
    // }

    public function generateImg(Request $request)
    {
        $input = $request->all();
        $options = $input['options'];
        $effects = Prompt::make();

        $effects->with($request->input('insertPrompt'), '');
        foreach ($options as $option) {
            call_user_func(array($effects, $option));
        }

        StableDiffusion::make()->withPrompt($effects)            
        ->generate($request->input('many'));

        return view('dashboard', [
            'options' => $options
        ]);
    }


    public function getLink()
    {
        $user_id = Auth::user()->id;
        $result = StableDiffusionResult::where(['user_id' => $user_id])->get();

        $freshResults = StableDiffusion::get($result[0]['replicate_id']);
        if ($freshResults->is_successful) {
            dd($freshResults->full_prompt);
        }
    }
}
