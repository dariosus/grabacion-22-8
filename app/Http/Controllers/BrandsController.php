<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Brand;

class BrandsController extends Controller
{
    public function all() {
      $brands = Brand::paginate(20);

      return view("brands", compact("brands"));
    }

    public function find($id) {
      $brand = Brand::find($id);

      return view("brand", compact("brand"));
    }
}
