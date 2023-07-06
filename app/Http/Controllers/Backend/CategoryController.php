<?php

namespace App\Http\Controllers\Backend;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    // 
    public function index()
    {

        $categories = Category::latest()->paginate(10);

        return view('backend.category.index', compact('categories'));
    }

    // Create a new Category
    public function create(Request $request)
    {

        if ($request->isMethod('POST')) {
            $request->validate([
                'name' => 'required|string|max:255',
                'slug'   => 'nullable|string|max:255',
                'thumbnail' => 'nullable',
            ]);

            $thumb = '';
            if (!empty($request->file('thumbnail'))) {
                $thumb = time() . '-' . str_replace(' ', '--', $request->file('thumbnail')->getClientOriginalName());
                // Store the thumbnail
                $request->file('thumbnail')->storeAs('/', $thumb);
            }


            Category::create([
                'name' => $request->name,
                'slug' => $request->slug,
                'thumbnail' => $thumb,
            ]);

            // Return
            return redirect()->back()->with('success', 'Category Cretaed Successfully');
        }

        return view('backend.category.create');
    }

    // Edit slider
    public function edit(Request $request, $id)
    {
        $category = Category::findOrFail($id);

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

            // Category Update
            $category->update([
                'name'      => $request->name,
                'slug'   => $request->slug,
                'thumbnail' => $thumb,
            ]);

            // Return
            return redirect()->back()->with('success', 'Category Updated Successfully');
        }


        return view('backend.category.edit', compact('category'));
    }


    // Delete a slider
    public function delete($id)
    {
        $category = Category::find($id);
        // Delete image
        Storage::delete('/' . $category->thumbnail);

        $category->delete();
        // Return
        return redirect()->back()->with('success', 'Category Deleted Successfully');
    }
}
