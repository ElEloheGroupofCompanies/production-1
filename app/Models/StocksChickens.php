<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\User;

class StocksChickens extends Model
{
    use HasFactory;

    protected $fillable = [
        'date_added',
        'chicken_kilo_types',
        'beginning_stocks',
        'chops_made',
        'dispatch_AM',
        'dispatch_PM',
        'ending_stocks',
        'ending_whole_chicken',
        'total_marinated_chicken',
        'user_id',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
