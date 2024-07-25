<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\User;

class DispatchForm extends Model
{
    use HasFactory;

    protected $fillable = [
        "date_dispatched",
        "location",
        "dispatch_AM",
        "dispatch_PM",
        "lumpia",
        "inasal",
        "lechon_manok",
        "vinegar1_5L",
        "paper_bag_1",
        "paper_bag_2",
        "paper_bag_3",
        "paper_bag_4",
        "cellophane_10x14",
        "patok",
        "manila_paper",
        "lpg_50kgs",
        "lpg_11kgs",
        "oil_can",
        "oil_litres",
        "dishwashing1_5L",
        "dishwashing_1L",
        "flour",
        "free_flour",
        "free_10x14",
        "free_paperbag",
        "free_patok",
        "free_vinegar1_5L",
        "others_amount",
        "user_id",
    ];
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
