<?php

namespace App\Models;

use App\Models\Product;
use App\Models\ProductStore;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Store extends Model
{
    protected $fillable = [
        'name',
        'location'
    ];

    public function products(): BelongsToMany
    {
        return $this->belongsToMany(Product::class)
            ->withPivot('quantity')
            ->withTimestamps();
    }

    public function productStores(): HasMany
    {
        return $this->hasMany(ProductStore::class, 'store_id');
    }
}
