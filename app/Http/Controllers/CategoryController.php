<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $products = Product::paginate(16);

        return view('pages.category', [
          'categories' => $categories,
          'products' => $products
        ]);
    }

    public function detail($slug)
    {
      $categories = Category::all();
      $category = Category::where('slug', $slug)->firstOrFail();
      $products = Product::where('categories_id', $category->id)->paginate(16);

      return view('pages.category', [
        'categories' => $categories,
        'products' => $products
      ]);
    }
}
