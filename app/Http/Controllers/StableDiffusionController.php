<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use RuliLG\StableDiffusion\Models\StableDiffusionResult;
use RuliLG\StableDiffusion\StableDiffusion;
use RuliLG\StableDiffusion\Prompt;
use Illuminate\Http\Request;

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
        // dd($options);
        // $input['options'] = implode(",", $options);

        StableDiffusion::make()->withPrompt(Prompt::make()
            ->with($request->input('insertPrompt'), '')
                ->$request->input($options))
                    ->generate($request->input('many'));
    }


    public function getLink()
    {
        $user_id = Auth::user()->id;
        $result = StableDiffusionResult::where(['user_id'=>$user_id])->get();

        $freshResults = StableDiffusion::get($result[0]['replicate_id']);
        if ($freshResults->is_successful) {
            dd($freshResults->output);
        }
    }

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
