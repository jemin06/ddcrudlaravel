<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $categorieItem = Category::latest()->take(4)->get();
        $product = Product::latest()->take(4)->get();
        return view('welcome', compact('categories' , 'categorieItem' , 'product'));
    }

}
