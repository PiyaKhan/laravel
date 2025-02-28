<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ItemGroup;

class ItemGroupController extends Controller
{
    public function index()
    {
        return view('item-group.index');
    }

    public function save(Request $request)
    {
        $title = $request->input('title');

        ItemGroup::create([
            'title' => $title
        ]);
        return redirect()->route('item-groups');
    }

    public function list()
    {
        $item_groups = Itemgroup::all();
        return view('item-group.item-group-list',compact('item_groups'));
    }
}
