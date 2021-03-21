<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\New_;
use Image;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::paginate(5);

        return view('product.all', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product.create');
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
            'image' => 'required|image',
            'name' => 'required|unique:products',
            'description' => 'required',
            'stocks' => 'integer'
        ]);

        if ($request->file('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $image = "product_" . time() . "." . $extension;

            Image::make($file)->save(public_path() . '/asset/image/' . $image);
        }

        $product = new Product();
        $product->name = $request->name;
        $product->description = $request->description;
        $product->stocks = $request->stocks;
        $product->image = $image;

        $product->save();
        return redirect()->action('ProductController@index')->with('message', 'product add successful');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(/*Product $product*/$id)
    {
        $product = Product::findOrFail($id);
        return view('product.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product, $id)
    {
        $product = Product::findOrFail($id);
        return view('product.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'image' => 'image',
            'name' => 'required',
            'description' => 'required',
            'stocks' => 'integer'
        ]);

        $product = Product::findOrFail($id);

        if ($request->file('image')) {
            @unlink(public_path() . '/asset/image/' . $product->image);
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $image = "product_" . time() . "." . $extension;

            Image::make($file)->save(public_path() . '/asset/image/' . $image);
            $product->image = $image;
        }

        $product->name = $request->name;
        $product->description = $request->description;
        $product->stocks = $request->stocks;

        $product->save();
        return redirect()->action('ProductController@index')->with('message', 'product update successful');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        @unlink(public_path() . '/asset/image/' . $product->image);
        $product->delete();
        return redirect()->action('ProductController@index')->with('message', 'product Delete successful');
    }
}
