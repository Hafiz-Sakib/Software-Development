<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    // This method will show products page
    public function index()
    {
        $products = Product::all();
        return view('products.list', ['products' => $products]);
        $products = Product::orderBy('created_at', 'DESC')->get();
        return view('products.list', [
            'products' => $products
        ]);
    }

    // This method will show create product page
    public function create()
    {
        return view('products.create');
    }

    // This method will store a product in db
    public function store(Request $request)
    {
        $rules = [
            'name' => 'required|min:5',
            'sku' => 'required|min:3',
            'price' => 'required|numeric'
        ];

        if ($request->image != "") {
            $rules['image'] = 'image';
        }

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect()->route('products.create')->withInput()->withErrors($validator);
        }

        // here we will insert product in db
        $product = new Product();
        $product->name = $request->name;
        $product->sku = $request->sku;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->save();

        if ($request->image != "") {
            // Here We Will handle The Image Input Part
            $image = $request->image;
            $ext = $image->getClientOriginalExtension();
            $imageName = time() . '.' . $ext; // unique image name

            // Save Image to Products Directory
            $image->move(public_path('uploads/products'), $imageName);

            // Save ImageName in Database
            $product->image = $imageName;
            $product->save();
        }

        return redirect()->route('products.index')->with('success', 'Product added successfully.');
    }

    // This method will show edit product page
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('products.edit', compact('product'));
    }


    // This method will update a product
    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        $request->validate([
            'name' => 'required',
            'sku' => 'required',
            'price' => 'required|numeric',
            'description' => 'required',
            'image' => 'nullable|image|max:2048',
        ]);

        $product->name = $request->name;
        $product->sku = $request->sku;
        $product->price = $request->price;
        $product->description = $request->description;

        if ($request->hasFile('image')) {
            // Handle image upload logic
            $imagePath = $request->file('image')->store('public/images');
            $product->image = basename($imagePath); // Store the file name in the database
        }

        $product->save();

        return redirect()->route('products.index')->with('success', 'Product updated successfully');
    }


    // This method will delete a product
    public function destroy($id)
    {
        // Find the product by ID
        $product = Product::findOrFail($id);

        // Check if the product has an image and delete it from the file system
        if ($product->image) {
            $imagePath = public_path('uploads/products/' . $product->image);
            if (file_exists($imagePath)) {
                unlink($imagePath); // Delete the image
            }
        }

        // Delete the product from the database
        $product->delete();

        // Redirect to the product index page with a success message
        return redirect()->route('products.index')->with('success', 'Product deleted successfully.');
    }
}
