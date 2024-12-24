<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::with('category')->get();
        return view('admin.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.product.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'category_id' => 'required|string|max:255',
            'name' => 'required|string',
            'price' => 'required|numeric|min:0',
            'status' => 'required|numeric|min:0',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'required|string',
            'tag' => 'required|string',
        ]);
        $imagePath = $request->file('image') ? $request->file('image')->store('product', 'public') : null;

        Product::create([
            'category_id' => $request->category_id,
            'name' => $request->name,
            'price' => $request->price,
            'status' => $request->status,
            'image' => $imagePath,
            'description' => $request->description,
            'tag' => $request->tag,

        ]);

        return redirect()->route('admin.product.index')->with('success', 'Product created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $products = Product::findOrFail($id);
        $categories = Category::all();
        return view('admin.product.edit', compact('products' , 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'category_id' => 'required|string|max:255',
            'name' => 'required|string',
            'price' => 'required|numeric|min:0',
            'status' => 'required|numeric|min:0',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'required|string',
            'tag' => 'required|string',
         ]);
         $Product = Product::findOrFail($id);
         $imagePath = $request->file('image') ? $request->file('image')->store('product', 'public') : null;

         $Product->update([
            'category_id' => $request->category_id,
            'name' => $request->name,
            'price' => $request->price,
            'status' => $request->status,
            'image' => $imagePath,
            'description' => $request->description,
            'tag' => $request->tag,
         ]);
         return redirect()->route('admin.product.index')->with('success', 'Product updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Product = Product::findOrFail($id);
        $Product->delete;
        return redirect()->route('admin.product.index')->with('success', 'Product Deleted successfully.');
    }
}
