<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Menu;
use App\Models\Category;

class APIController extends Controller
{
    public function categoriesByMenuSlug($slug)
    {
        $menu = Menu::where('slug', $slug)->first();
        $categories = Category::where('menu_id', $menu->id )->get();
        return response()->json($categories, 200);
    }
}
