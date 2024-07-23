<?php

namespace App\Models;

use NumberFormatter;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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

    protected $casts = [
        'price' => MoneyCast::class,
    ];

    public function calculatePrice()
    {
        $this->price = $this->quantity * $this->transactionDetails->price;
    }

    protected static function booted()
    {
        static::creating(function (TransactionDetail $transactionDetail) {
            $transactionDetail->calculatePrice();
        });

        static::updating(function (TransactionDetail $transactionDetail) {
            $transactionDetail->calculatePrice();
        });
    }

    public function getPriceFormattedAttribute()
    {
        // Pastikan kamu sudah meng-install extension intl di PHP
        $formatter = new NumberFormatter('id_ID', NumberFormatter::CURRENCY);
        return $formatter->formatCurrency($this->price, 'IDR');
    }
}
