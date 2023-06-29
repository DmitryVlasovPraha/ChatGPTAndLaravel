<?php

namespace App\Http\Controllers;

use App\Http\Requests\BrandRequest;
use App\Models\Brand;


class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      //
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        return view('brand.create');
    }

    /**
     * Store a newly created brand.
     */
    public function store(BrandRequest $request)
    {
        $brand = new Brand();
        $data = $request->all();
        $brand->create($data);
        return redirect()
            ->route('home')
            ->with('success', 'New brand successful create!');

    }

    /**
     * Display the specified resource.
     */
    public function show(BrandRequest $brand)
    {
        return view('brand.show', compact('brand'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Brand $brand)
    {
       return view('brand.edit', compact('brand'));
    }

    /**
     * Update brand.
     */
    public function update(BrandRequest $request, Brand $brand)
    {
        $data = $request->all();
        $brand->update($data);
        return redirect()->route('home', ['brand' => $brand->id])->with('success', 'New brand successful update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Brand $brand)
    {
        //
    }
}
