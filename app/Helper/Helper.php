<?php


function getAssetUrl($filename, $folder = 'uploads')
{
    if (str_starts_with($filename, 'http')) {
        return $filename;
    } else {
        return asset($folder . '/' . $filename);
    }
}

function productLabel($product)
{
    $day = Carbon\Carbon::today()->diffInDays($product->created_at);

    if ($day <= 7 && request()->routeIs('front.shop.*')) {
        return '<div class="Pro-lable">
        <span class="p-discount">New</span>
    </div>';
    }
    if ($day <= 7) {
        return '<div class="Pro-lable">
            <span class="p-text">New</span>
        </div>';
    }

    
}
