<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    // 
    public function index(){

        $sliders = Slider::latest()->paginate(10);

        return view('backend.slider.index', compact('sliders'));
    }

    // Create a new Slider
    public function create(Request $request){

        if($request->isMethod('POST')){
            $request->validate([
                'title'      => 'required|string|max:255',
                'subtitle'   => 'nullable|string|max:255',
                'btn_text'   => 'nullable|string|max:255',
                'btn_link'   => 'nullable|string|max:255',
                'alignment'  => 'required|in:left,right,center',
                'background' => 'required',
            ]);
            
            $background = '';
            if(!empty($request->file('background'))){
                $background = $request->file('background')->getClientOriginalName();
                $background = str_replace(' ', '--', $background);
                $background = time() . '-' . $background;
                // Store the background
                $request->file('background')->storeAs('/', $background);
            }


            Slider::create([
                'title' => $request->title,
                'subtitle' => $request->subtitle,
                'btn_text' => $request->btn_text,
                'btn_link' => $request->btn_link,
                'alignment' => $request->alignment,
                'background' => $background,
            ]);

            // Return
            return redirect()->back()->with('success', 'Slider Cretaed Successfully');
            
        }

        return view('backend.slider.create');
    }
}
