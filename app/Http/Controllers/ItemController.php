<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ItemController extends Controller
{
    public function index()
    {
        $items = Item::all();

        return view('items.index', compact('items'));
    }

    public function show(string $uid)
    {
        $item = Item::where('uid', $uid)
            ->first();

        return view('items.show', compact('item'));
    }
}
