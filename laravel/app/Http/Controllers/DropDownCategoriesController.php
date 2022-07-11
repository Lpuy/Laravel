<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;

class DropDownCategoriesController extends Controller
{
    public static function dropDownHeader(): \Illuminate\Database\Eloquent\Collection
    {
        return Categories::all();
    }
}



