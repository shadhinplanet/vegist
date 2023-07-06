<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Slider;
use Illuminate\Http\Request;

class HomepageController extends Controller
{

    public function index(  )
    {

        $sliders = Slider::latest()->get();
        $categories = Category::latest()->get();

        return view('frontend.home.index', compact('sliders', 'categories'));
    }
}
