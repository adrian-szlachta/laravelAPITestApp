<?php

namespace App\Http\Controllers;
use App\Dish;
use Illuminate\Http\Request;

class DishController extends Controller
{
    public function index()
    {
        return Dish::all();
    }

    public function show($id)
    {
        return Dish::find($id);
    }

    public function store(Request $request)
    {
        $dish = Dish::create($request->all());

        return response()->json($dish, 201);
    }

    public function update(Request $request, Dish $dish)
    {
        $dish->update($request->all());

        return response()->json($dish, 200);
    }

    public function delete(Dish $dish)
    {
        $dish->delete();

        return response()->json(null, 204);
    }
}
