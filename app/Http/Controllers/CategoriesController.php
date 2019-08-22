<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoriesController extends Controller
{
    public function all() {
      $categories = Category::paginate(20);

      return view("categories", compact("categories"));
    }

    public function find($id) {
      $category = Category::find($id);

      return view("category", compact("category"));
    }
}
