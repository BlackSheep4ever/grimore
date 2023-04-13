<?php

namespace App\Http\Controllers;

use App\Models\Armors;
use App\Models\Favorites;
use App\Models\Feat;
use App\Models\Items;
use App\Models\Skills;
use App\Models\Weapons;
use Illuminate\Http\Request;

class FavoriteController extends Controller
{
    public function index()
    {
        $feats = Feat::all();
        $skills = Skills::all();
        $weapons = Weapons::all();
        $armors = Armors::all();
        $items = Items::all();
        $favs = Favorites::all();

        return view('profile.favorite', 
        [
            'feats' => $feats,
            'skills' => $skills,
            'weapons' => $weapons,
            'armors' => $armors,
            'items' => $items,
            'favs' => $favs,
        ]);
    }

    public function remove(Request $request)
    {
        $ids = $request->input('fav_name');

        foreach ($ids as $id ){
            $fav_name = Favorites::where(['id' => $id])->first();
            $fav_name->delete();
          }
     return redirect('/favorite')->with('msg', 'Talento apagado do seu Grimore!'); 
    }
}
