<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Level;
use App\Genre;
use App\Brand;

class ListController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('list', ['products' => $products]);
    }
}
