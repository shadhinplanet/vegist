<?php

namespace App\Http\Controllers\Backend;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Gallery;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    // 
    public function index()
    {

        $products = Product::latest()->paginate(10);

        return view('backend.product.index', compact('products'));
    }

    // Create a new Product
    public function create(Request $request)
    {
        
        if ($request->isMethod('POST')) {
     
            $request->validate([
                'title'        => 'required|string|max:255',
                'slug'        => 'required|string|max:255',
                'price'       => 'required|numeric',
                'category_id' => 'required|not_in:none',
                'excerpt'     => 'nullable',
                'description' => 'nullable',
                'gallery' => 'required',
            ]);

            $product = Product::create([
                'title' => $request->title,
                'slug' => $request->slug,
                'price' => $request->price,
                'excerpt' => $request->excerpt,
                'description' => $request->description,
                'category_id' => $request->category_id,
            ]);

            // Gallery
            if(!empty($request->file('gallery'))){
                foreach ($request->file('gallery') as $image) {
                    
                    $thumb = time() . '-' . str_replace(' ', '--', $image->getClientOriginalName());
                    // Store the image
                    $image->storeAs('/products', $thumb);

                    Gallery::create([
                        'name' => $thumb,
                        'product_id' => $product->id
                    ]);

                }
            }

            // Return
            return redirect()->back()->with('success', 'Product Cretaed Successfully');
        }
        $categories = Category::get(['id', 'name']);
        return view('backend.product.create', compact('categories'));
    }

    // Edit slider
    public function edit(Request $request, $id)
    {
        $category = Product::findOrFail($id);

        if ($request->isMethod('PUT')) {
            $request->validate([
                'name' => 'required|string|max:255',
                'slug'   => 'nullable|string|max:255',
                'thumbnail' => 'nullable',
            ]);

            $thumb = $category->thumbnail;

            if (!empty($request->file('thumbnail'))) {
                Storage::delete('/' . $thumb);
                $thumb = time() . '-' . str_replace(' ', '--', $request->file('thumbnail')->getClientOriginalName());
                // Store the thumbnail
                $request->file('thumbnail')->storeAs('/', $thumb);
            }

            // Product Update
            $category->update([
                'name'      => $request->name,
                'slug'   => $request->slug,
                'thumbnail' => $thumb,
            ]);

            // Return
            return redirect()->back()->with('success', 'Product Updated Successfully');
        }


        return view('backend.product.edit', compact('category'));
    }


    // Delete a slider
    public function delete($id)
    {
        $category = Product::find($id);
        // Delete image
        Storage::delete('/' . $category->thumbnail);

        $category->delete();
        // Return
        return redirect()->back()->with('success', 'Product Deleted Successfully');
    }
}
