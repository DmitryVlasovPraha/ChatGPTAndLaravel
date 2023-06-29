<?php

namespace App\Http\Controllers;
use App\Models\Brand;

class IndexController
{
    public function index() {

        $brands = Brand::OrderBy('created_at', 'DESC')->paginate(10);

        return view('index', compact('brands'));
    }
}

