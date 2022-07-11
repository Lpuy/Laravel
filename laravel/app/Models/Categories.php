<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;

    protected $fillable = [
        'category'
    ];

    public function sub_categories()
    {
        return $this->hasMany(SubCategories::class);
    }
}
