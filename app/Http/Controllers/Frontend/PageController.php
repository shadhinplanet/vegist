<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Slider;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;

class PageController extends Controller
{
    // Home
    public function home()
    {

        $sliders = Slider::latest()->get();
        $categories = Category::latest()->get();

        return view('frontend.home.index', compact('sliders', 'categories'));
    }

    // Shop
    public function shop()
    {
        $products = Product::latest()->paginate();
        return view('frontend.shop.index', compact('products'));
    }


    // Single Product
    public function singleProduct($slug) {
        $product = Product::where('slug', $slug)->first();

        return view('frontend.shop.single', compact('product'));
    }

    // Single Product
    public function singleAjaxProduct(Request $request) {
        $product = Product::where('slug', $request->slug)->first();

        return [
            'product' => $product
        ];
    }

}
