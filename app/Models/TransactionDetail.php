<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TransactionDetail extends BaseModel
{
    use HasFactory;

    protected $fillable = [
        'tour_package_id',
        'transaction_id',
        'name',
        'price',
        'quantity',
    ];

    public function transaction(): BelongsTo
    {
        return $this->belongsTo(Transaction::class);
    }

    public function transactionDetails(): BelongsTo
    {
        return $this->belongsTo(TourPackage::class);
    }
}
