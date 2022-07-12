<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategories extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'categories_id'
    ];

    public function goods(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Goods::class);
    }

    public function categories(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Categories::class);
    }
}
