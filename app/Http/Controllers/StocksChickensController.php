<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StocksChickens;
use App\Http\Resources\StocksChickensResource;

class StocksChickensController extends Controller
{
    public function getStocksChickens() {
        $stocksChickens = StocksChickensResource::collection(StocksChickens::all());
        return response()->json($stocksChickens, 200, [], JSON_PRETTY_PRINT);
    }

    public function getStocksChicken($id) {
        $stocksChicken = new StocksChickensResource(StocksChickens::find($id));
        return response()->json($stocksChicken, 200, [], JSON_PRETTY_PRINT);
    }

    function getStocksChickenByUserRole ($id) {
        $stocksChicken = StocksChickensResource::collection(StocksChickens::where('user_id', $id)->get());
        return response()->json($stocksChicken, 200, [], JSON_PRETTY_PRINT);
    }
    
    function setStocksChicken(Request $request) {
        $fields = $request->validate([
            'date_added' => 'required|date',
            'chicken_kilo_types' => 'required',
            'beginning_stocks' => 'required|string',
            'chops_made' => 'required|string',
            'dispatch_AM' => 'required|string',
            'dispatch_PM' => 'required|string',
            'ending_stocks' => 'required|string',
            'ending_whole_chicken' => 'nullable|string',
            'total_marinated_chicken' => 'nullable|string',
        ]);

        $stocksChicken = StocksChickens::create([
            'date_added' => $fields['date_added'],
            'chicken_kilo_types' => $fields['chicken_kilo_types'],
            'beginning_stocks' => $fields['beginning_stocks'],
            'chops_made' => $fields['chops_made'],
            'dispatch_AM' => $fields['dispatch_AM'],
            'dispatch_PM' => $fields['dispatch_PM'],
            'ending_stocks' => $fields['ending_stocks'],
            'ending_whole_chicken' => $fields['ending_whole_chicken'],
            'total_marinated_chicken' => $fields['total_marinated_chicken'],
            "user_id" => auth()->user()->id
        ]);

        return response()->json([
            'message' => 'Stocks Chicken Created',
            'data' => $stocksChicken
        ], 201);
    }
}
