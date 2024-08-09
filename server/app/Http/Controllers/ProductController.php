<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product = Product::with('features')->get();

        if (!$product) {
            return response()->json(['success' => false, 'error' => 'Product not found!']);
        }

        return response()->json($product);
    }

    public function indexByCategory()
    {
        // İlk 3 "Charging Station" ürününü al
        $chargingStations = Product::with('features')
            ->where('category', 'Charcing Station')
            ->take(3)
            ->get();

        // İlk 3 "Solar Energy" ürününü al
        $solarEnergy = Product::with('features')
            ->where('category', 'Solar Energy')
            ->take(3)
            ->get();

        // Sonuçları birleştir
        $products = $chargingStations->merge($solarEnergy);

        if ($products->isEmpty()) {
            return response()->json(['success' => false, 'error' => 'No products found!']);
        }

        return response()->json($products);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
