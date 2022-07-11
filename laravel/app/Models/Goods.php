<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Goods extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'amount',
        'price',
        'text',
        'object',

    ];

    public function sizes()
    {
        return $this->belongsToMany(Size::class);
    }

    public function sub_categories()
    {
        return $this->belongsTo(SubCategories::class);
    }
}
