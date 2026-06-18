<?php

namespace App\Models;

use App\Models\ProductStore;
use App\Models\Store;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    protected $fillable = [
        'name',
        'sku',
        'price',
        'description'
    ];

    public function stores(): BelongsToMany
    {
        return $this->belongsToMany(Store::class)
            ->withPivot('quantity')
            ->withTimestamps();
    }

    public function productStores(): HasMany
    {
        return $this->hasMany(ProductStore::class, 'product_id');
    }

}
