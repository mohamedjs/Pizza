<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pizza;
class pizza_api extends Controller
{
  public function index()
    {
        return Pizza::all();
    }

    public function show(Pizza $pizza)
    {
        return $pizza;
    }

    public function store(Request $request)
    {
        $pizza = Pizza::create($request->all());

        return response()->json($pizza, 201);
    }

    public function update(Request $request, Pizza $pizza)
    {
        $pizza->update($request->all());

        return response()->json($pizza, 200);
    }

    public function delete(Pizza $pizza)
    {
        $pizza->delete();

        return response()->json(null, 204);
    }
}
