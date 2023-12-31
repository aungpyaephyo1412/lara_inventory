<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use App\Http\Requests\StoreInventoryRequest;
use App\Http\Requests\UpdateInventoryRequest;

class InventoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Inventory::when(request()->has("keyword"),function ($query){
            $keyword = request()->keyword;
            $query->where("name","like","%".$keyword."%");
    })->paginate(10)->withQueryString();
        return view('inventory.index',compact("items"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("inventory.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreInventoryRequest $request)
    {
        $inventory = new Inventory();
        $inventory->name = $request->item_name;
        $inventory->price = $request->item_price;
        $inventory->stock = $request->item_stock;
        $inventory->save();
        return redirect()->route("inventory.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(Inventory $inventory)
    {
       return view("inventory.show",["item" => $inventory]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Inventory $inventory)
    {
        return view("inventory.edit",["item" => $inventory]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateInventoryRequest $request, Inventory $inventory)
    {
        $inventory->name = $request->item_name;
        $inventory->price = $request->item_price;
        $inventory->stock = $request->item_stock;
        $inventory->update();
        return redirect()->route("inventory.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Inventory $inventory)
    {
        $inventory->delete();
        return redirect()->back();
    }
}
