<?php

namespace App\Http\Controllers;
use App\Models\Brand;

class IndexController
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application
     * Return main page
     */
    public function index() {

        $brands = Brand::OrderBy('created_at', 'DESC')->paginate(10);

        return view('index', compact('brands'));
    }
}

