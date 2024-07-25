<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DispatchForm;
use App\Http\Resources\DispatchFormResource;

class DispatchFormController extends Controller
{
    public function getDispatchForms() {
        $dispatchForms = DispatchFormResource::collection(DispatchForm::all());
        return response()->json($dispatchForms, 200, [], JSON_PRETTY_PRINT);
    }

    public function getDispatchForm($id) {
        $dispatchForm = new DispatchFormResource(DispatchForm::find($id));
        return response()->json($dispatchForm, 200, [], JSON_PRETTY_PRINT);
    }

    function setDispatchForm(Request $request) {
        $fields = $request->validate([
            'date_dispatched' => 'required|date',
            'location' => 'required|string',
            'dispatch_AM' => 'required|string',
            'dispatch_PM' => 'nullable|string',
            'lumpia' => 'nullable|string',
            'inasal' => 'nullable|string',
            'lechon_manok' => 'nullable|string',
            'vinegar1_5L' => 'nullable|string',
            'paper_bag_1' => 'nullable|string',
            'paper_bag_2' => 'nullable|string',
            'paper_bag_3' => 'nullable|string',
            'paper_bag_4' => 'nullable|string',
            'cellophane_10x14' => 'nullable|string',
            'patok' => 'nullable|string',
            'manila_paper' => 'nullable|string',
            'lpg_50kgs' => 'nullable|string',
            'lpg_11kgs' => 'nullable|string',
            'oil_can' => 'nullable|string',
            'oil_litres' => 'nullable|string',
            'dishwashing1_5L' => 'nullable|string',
            'dishwashing_1L' => 'nullable|string',
            'flour' => 'nullable|string',
            'free_flour' => 'nullable|string',
            'free_10x14' => 'nullable|string',
            'free_paperbag' => 'nullable|string',
            'free_patok' => 'nullable|string',
            'free_vinegar1_5L' => 'nullable|string',
        ]);

        $dispatchForm = DispatchForm::create([
            'date_dispatched' => $fields['date_dispatched'],
            'location' => $fields['location'],
            'dispatch_AM' => $fields['dispatch_AM'],
            'dispatch_PM' => $fields['dispatch_PM'],
            'lumpia' => $fields['lumpia'],
            'inasal' => $fields['inasal'],
            'lechon_manok' => $fields['lechon_manok'],
            'vinegar1_5L' => $fields['vinegar1_5L'],
            'paper_bag_1' => $fields['paper_bag_1'],
            'paper_bag_2' => $fields['paper_bag_2'],
            'paper_bag_3' => $fields['paper_bag_3'],
            'paper_bag_4' => $fields['paper_bag_4'],
            'cellophane_10x14' => $fields['cellophane_10x14'],
            'patok' => $fields['patok'],
            'manila_paper' => $fields['manila_paper'],
            'LPG_50kgs' => $fields['LPG_50kgs'],
            'LPG_11kgs' => $fields['LPG_11kgs'],
            'oil_can' => $fields['oil_can'],
            'oil_litres' => $fields['oil_litres'],
            'dishwashing1_5L' => $fields['dishwashing1_5L'],
            'dishwashing_1L' => $fields['dishwashing_1L'],
            'flour' => $fields['flour'],
            'free_flour' => $fields['free_flour'],
            'free_10x14' => $fields['free_10x14'],
            'free_paperbag' => $fields['free_paperbag'],
            'free_patok' => $fields['free_patok'],
            'free_vinegar1_5L' => $fields['free_vinegar1_5L'],
            "user_id" => auth()->user()->id
        ]);

        return response()->json([
            'message' => 'Dispatch Form Created',
            'data' => $dispatchForm
        ], 201);
    }
}
