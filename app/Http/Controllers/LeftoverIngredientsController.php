<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LeftoverIngredients;
use App\Http\Resources\LeftoverIngredientsResource;

class LeftoverIngredientsController extends Controller
{

    public function getLeftoverIngredient($id) {
        $leftoverIngredient = new LeftoverIngredientsResource(LeftoverIngredients::find($id));
        return response()->json($leftoverIngredient, 200, [], JSON_PRETTY_PRINT);
    }

    public function getLeftoverIngredients() {
        $leftoverIngredients = LeftoverIngredientsResource::collection(LeftoverIngredients::all());
        return response()->json($leftoverIngredients, 200, [], JSON_PRETTY_PRINT);
    }

    function setLeftoverIngredient(Request $request) {
        $fields = $request->validate([
            "date_added" => "required|date",
            "ingredient_name" => "required|string",
            "quantity" => "required|string",
            "unit_price" => "required|string",
            "amount" => "required|string",
        ]);

        $leftoverIngredient = LeftoverIngredients::create([
            "date_added" => $fields["date_added"],
            "ingredient_name" => $fields["ingredient_name"],
            "quantity" => $fields["quantity"],
            "unit_price" => $fields["unit_price"],
            "amount" => $fields["amount"],
            "user_id" => auth()->user()->id
            
        ]);
        return response()->json([
            "message" => "Leftover ingredient has been added",
            "data" => $leftoverIngredient
        ], 201, [], JSON_PRETTY_PRINT);
    }
}
