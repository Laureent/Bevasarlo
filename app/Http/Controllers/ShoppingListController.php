<?php

namespace App\Http\Controllers;

use App\Models\ShoppingList;
use Illuminate\Http\Request;

class ShoppingListController extends Controller
{
    /*
        Visszaadja a tábla összes elemét.
    */
    public function index()
    {
        return ShoppingList::all();
    }

    /*
        A $request-ben kapott elemet hozzáadja a táblához.
    */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'amount' => 'required|numeric'
        ]);
        return ShoppingList::create($request->all());
    }

    /*
        A $id alapján törli az element a táblából.
    */
    public function destroy($id)
    {
        return ShoppingList::destroy($id);
    }
}
