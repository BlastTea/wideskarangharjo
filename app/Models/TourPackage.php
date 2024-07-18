<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TourPackage extends BaseModel
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'description',
    ];

    public function transactionDetails(): HasMany
    {
        return $this->hasMany(TransactionDetail::class);
    }

    public function videos(): HasMany
    {
        return $this->hasMany(Video::class);
    }

    public function images(): HasMany
    {
        return $this->hasMany(Image::class);
    }

    public function services(): HasMany
    {
        return $this->hasMany(Service::class);
    }
}
