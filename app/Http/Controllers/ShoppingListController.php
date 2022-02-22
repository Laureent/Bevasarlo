<?php

namespace App\Http\Controllers;

use App\Models\ShoppingList;
use Illuminate\Http\Request;

class ShoppingListController extends Controller
{
    public function index()
    {
        return ShoppingList::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'amount' => 'required|numeric'
        ]);
        return ShoppingList::create($request->all());
    }

    public function destroy($id)
    {
        return ShoppingList::destroy($id);
    }
}
