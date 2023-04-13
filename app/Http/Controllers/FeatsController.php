<?php

namespace App\Http\Controllers;

use App\Models\Favorites;
use App\Models\Feat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

Use Response;

class FeatsController extends Controller
{
    public function feats()
    {
        $feats = Feat::all();

        $source = $feats->sortBy('source')->pluck('source')->unique();
        return view('tables.feats', compact(
            'feats',
            'source',
        ));
    }

    public function store(Request $request)
    {
        $ids = $request->input('fav_name');

        foreach ($ids as $id ){
            $fav_name = Feat::where(['id' => $id])->first();
            Favorites::updateOrCreate(['feat_name' => $fav_name->feat_name]);
          }
     return redirect('/feats')->with('msg', 'Talento(s) escrito(s) em seu Grimore'); 
    }
}
