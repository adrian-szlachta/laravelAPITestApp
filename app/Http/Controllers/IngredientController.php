<?php

namespace App\Http\Controllers;
use App\Ingredient;
use Illuminate\Http\Request;

class IngredientController extends Controller
{
    public function index()
    {
        return Ingredient::all();
    }

    public function show($id)
    {
        return Ingredient::find($id);
    }

    public function store(Request $request)
    {
        $ingredient = Ingredient::create($request->all());

        return response()->json($ingredient, 201);
    }

    public function update(Request $request, Ingredient $ingredient)
    {
        $ingredient->update($request->all());

        return response()->json($ingredient, 200);
    }

    public function delete(Ingredient $ingredient)
    {
        $ingredient->delete();

        return response()->json(null, 204);
    }
}
