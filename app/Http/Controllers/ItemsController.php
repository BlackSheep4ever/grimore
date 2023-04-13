<?php

namespace App\Http\Controllers;

use App\Models\Items;
use Illuminate\Http\Request;

class ItemsController extends Controller
{
    public function items()
    {
        $items = Items::all();

        $item_type = $items->sortBy('item_type')->pluck('item_type')->unique();

        return view('tables.items', compact(
            'items',
            'item_type'));
    }
}
