<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // This Method Will Show products page
    public function index()
    {
        return view('products.list');
    }
    //This Method Will Show Create Product page
    public function create()
    {
        return view('products.create');
    }
    //This Method Will store a product in db
    public function store(Request $request)
    {
        $rules = [
            'name' => 'required|min:5',
            'sku' => 'required|min:3',
            'price' => 'required|numeric',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect()->route('products.create')->withInput()->withErrors($validator);
        }

        // Here We Will Add Products into DB
        $product = new Product();
        $product->name = $request->name;
        $product->sku = $request->sku;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->save();

        return redirect()->route('products.index')->with('success', 'Product Added Successfully.');
    }
    //This Method Will show edit Product page
    public function edit() {}
    //This Method Will update a product
    public function update() {}
    //This Method Will delete a product
    public function delete() {}
}
