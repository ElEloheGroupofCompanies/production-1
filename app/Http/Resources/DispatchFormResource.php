<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class DispatchFormResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "id" => $this->id,
            "date_dispatched" => $this->date_dispatched,
            "location" => $this->location,
            "dispatch_AM" => $this->dispatch_AM,
            "dispatch_PM" => $this->dispatch_PM,
            "lumpia" => $this->lumpia,
            "inasal" => $this->inasal,
            "lechon_manok" => $this->lechon_manok,
            "vinegar1_5L" => $this->vinegar1_5L,
            "paper_bag_1" => $this->paper_bag_1,
            "paper_bag_2" => $this->paper_bag_2,
            "paper_bag_3" => $this->paper_bag_3,
            "paper_bag_4" => $this->paper_bag_4,
            "cellophane_10x14" => $this->cellophane_10x14,
            "patok" => $this->patok,
            "manila_paper" => $this->manila_paper,
            "lpg_50kgs" => $this->lpg_50kgs,
            "lpg_11kgs" => $this->lpg_11kgs,
            "oil_can" => $this->oil_can,
            "oil_litres" => $this->oil_litres,
            "dishwashing1_5L" => $this->dishwashing1_5L,
            "dishwashing_1L" => $this->dishwashing_1L,
            "flour" => $this->flour,
            "free_flour" => $this->free_flour,
            "free_10x14" => $this->free_10x14,
            "free_paperbag" => $this->free_paperbag,
            "free_patok" => $this->free_patok,
            "free_vinegar1_5L" => $this->free_vinegar1_5L,
            "user" => $this->user
        ];
    }
}
