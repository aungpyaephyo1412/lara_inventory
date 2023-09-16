<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class InventoryController extends Controller
{
    public function index()
    {
        $items = Item::all();
        return view('inventory.index',compact("items"));
    }

    public function create()
    {
        return view('inventory.create');
    }

    public function store(Request $request)
    {
        $request->validate([
           "item_name" => "required",
           "item_price" => "required",
           "item_stock" => "required"
        ]);
        $items = new Item();
        $items->name = $request->item_name;
        $items->price = $request->item_price;
        $items->stock = $request->item_stock;
        $items->save();
        return redirect()->route("inventory.index");
    }
    public function show($id)
    {
        $item = Item::findOrFail($id);
        return view("inventory.show",compact("item"));

    }

    public function edit($id)
    {
        $item = Item::findOrfail($id);
        return view('inventory.edit',compact("item"));
    }

    public function update($id,Request $request)
    {
        $request->validate([
            "item_name" => "required",
            "item_price" => "required",
            "item_stock" => "required"
        ]);
        $item = Item::findOrFail($id);
        $item->name = $request->item_name;
        $item->price = $request->item_price;
        $item->stock = $request->item_stock;
        $item->update();
        return redirect()->route("inventory.index");
    }

    public function delete($id)
    {
        Item::findOrFail($id)->delete();
        return redirect()->back();
    }
}
