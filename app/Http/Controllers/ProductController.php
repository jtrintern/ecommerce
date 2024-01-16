<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $product = Product::all()->reverse();
        return view('admin.page.show_product', compact('product'));
    }

    public function home()
    {
        //
        $product = Product::all();
        return view('toyspace.index', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $cat = Category::all();
        return view('admin.page.add_product', compact('cat'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductRequest $request)
    {
        //

        $product = Product::create([
            'name' => $request->input('name'),
            'stock' => $request->input('stock'),
            'price' => $request->input('price'),
            'desc' => $request->input('desc'),
            'cat_id' => $request->input('category_id'),
        ]);

        // dd($request->file('images'));

        // Simpan gambar ke tabel product_images
        foreach ($request->file('images') as $image) {
            $path = $image->store('media/images', 'public'); // Sesuaikan path sesuai kebutuhan
            // dd($path);
            $product->images()->create(['path' => $path]);
            sleep(1);
        }

        return redirect()->route('indexProduct')->with('success', 'Product created successfully');
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
        $cat = Category::all();
        return view('admin.page.edit_product', compact('product', 'cat'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProductRequest $request, Product $product)
    {
        //
        // dd($request->file('images'));

        $product->update([
            'name' => $request->input('name'),
            'stock' => $request->input('stock'),
            'price' => $request->input('price'),
            'desc' => $request->input('desc'),
            'cat_id' => $request->input('category_id'),
        ]);

        if ($request->hasFile('images')) {
            // dd(Storage::path($product->images[1]->path));
            // dd($product->images);

            foreach ($product->images as $image) {
                // dd($image->path);
                if (File::exists($image->path)) {
                    File::delete($image->path);
                }
            }
            $product->images()->delete();

            foreach ($request->file('images') as $image) {
                $path = $image->public_path('media/images'); // Sesuaikan path sesuai kebutuhan
                // dd($path);
                $product->images()->create(['path' => $path]);
            }
        }
             


        return redirect()->route('indexProduct')->with('success', 'Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
        foreach ($product->images as $image) {
            // dd($image->path);
            if (File::exists($image->path)) {
                File::delete($image->path);
            }
        }
        $product->delete();

        return redirect()->route('indexProduct')->with('success', 'Product deleted successfully');
    }

    public function single()
    {
        return view('toyspace.page.single_product');
    }

    public function shopCart()
    {
        return view('toyspace.page.shop_cart');
    }

    public function checkout()
    {
        return view('toyspace.page.checkout');
    }
}
