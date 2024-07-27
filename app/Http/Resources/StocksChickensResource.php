<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class StocksChickensResource extends JsonResource
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
            "date_added" => $this->date_added,
            "chicken_kilo_types" => $this->chicken_kilo_types,
            "beginning_stocks" => $this->beginning_stocks,
            "chops_made" => $this->chops_made,
            "dispatch_AM" => $this->dispatch_AM,
            "dispatch_PM" => $this->dispatch_PM,
            "ending_stocks" => $this->ending_stocks,
            "ending_whole_chicken" => $this->ending_whole_chicken,
            "total_marinated_chicken" => $this->total_marinated_chicken,
            "user" => $this->user
        ];
    }
}
