<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cookie;

class CartController extends Controller
{

    public function index()
    {
        if (Cookie::get('shopping_cart')) {
            $cookie_data = stripslashes(Cookie::get('shopping_cart'));
            $carts = json_decode($cookie_data, false);
        }else{
            $carts = [];
        }
        
        return view('frontend.cart.index', compact('carts'));
    }

    public function addToCart(Request $request)
    {
        $prod_id = $request->input('product_id');
        $quantity = $request->input('quantity');


        if (Cookie::get('shopping_cart')) {
            $cookie_data = stripslashes(Cookie::get('shopping_cart'));
            $cart_data = json_decode($cookie_data, true);
        } else {
            $cart_data = array();
        }

        $item_id_list = array_column($cart_data, 'item_id');
        $prod_id_is_there = $prod_id;

        if (in_array($prod_id_is_there, $item_id_list)) {
            foreach ($cart_data as $keys => $values) {
                if ($cart_data[$keys]["item_id"] == $prod_id) {
                    $cart_data[$keys]["item_quantity"] = $quantity;
                    $item_data = json_encode($cart_data);
                    $minutes = 60;
                    Cookie::queue(Cookie::make('shopping_cart', $item_data, $minutes));
                    return response()->json(['message' => 'Item updated to Cart']);
                }
            }
        } else {
            $product = Product::find($prod_id);

            if ($product) {
                $prod_name = $product->title;
                $prod_image = $product->gallery[0]->name;
                $priceval = $product->price;

                $item_array = array(
                    'item_id' => $prod_id,
                    'item_name' => $prod_name,
                    'item_slug' => $product->slug,
                    'item_quantity' => $quantity,
                    'item_price' => $priceval,
                    'item_image' => $prod_image
                );
                $cart_data[] = $item_array;

                $item_data = json_encode($cart_data);
                $minutes = 60;
                Cookie::queue(Cookie::make('shopping_cart', $item_data, $minutes));
                return response()->json(['message' => '"' . $prod_name . '" Added to Cart']);
            }
        }
    }

    // Remove from cart
    public function removeCartItem(Request $request)
    {
        $prod_id = $request->input('product_id');

      

        $cookie_data = stripslashes(Cookie::get('shopping_cart'));
        $cart_data = json_decode($cookie_data, true);

        $item_id_list = array_column($cart_data, 'item_id');
        $prod_id_is_there = $prod_id;

        if(in_array($prod_id_is_there, $item_id_list))
        {
            
            foreach($cart_data as $keys => $values)
            {
                if($cart_data[$keys]["item_id"] == $prod_id)
                {
                    // unset($cart_data[$keys]);
                    $new = array_splice($cart_data,$keys,1);
                    $item_data = json_encode($cart_data);
                    $minutes = 60;
                    Cookie::queue(Cookie::make('shopping_cart', $item_data, $minutes));
                    return response()->json(['message'=>'Item Removed from Cart']);
                }
            }
        }
    }



    public function loadCookieData()
    {
        if (Cookie::get('shopping_cart')) {
            $cookie_data = stripslashes(Cookie::get('shopping_cart'));
            $cart_data = json_decode($cookie_data, false);
            $totalcart = count($cart_data);


            $html = '';
            $total = 0;
            foreach ($cart_data as $key => $item) {
                $total += ($item->item_quantity*$item->item_price );
                $html .= '<li class="cart-item">
                <div class="cart-img">
                    <a href="' . route('front.shop.single', $item->item_slug) . '">
                        <img src="' . getAssetUrl($item->item_image) . '" alt="' . $item->item_name . '"
                            class="img-fluid">
                    </a>
                </div>
                <div class="cart-title">
                    <h6><a href="' . route('front.shop.single', $item->item_slug) . '">' . $item->item_name . '</a></h6>
                    <div class="cart-pro-info">
                        <div class="cart-qty-price">
                            <span class="quantity">' . $item->item_quantity . ' x </span>
                            <span class="price-box">$' . $item->item_price . ' USD</span>
                        </div>
                        <div class="delete-item-cart">
                            <a href="javascript:void(0)" class="remove-cart-item" data-id="'.$item->item_id.'"><i class="icon-trash icons"></i></a>
                        </div>
                    </div>
                </div>
            </li>';
            }



            return response()->json(['totalcart' => $totalcart, 'cart' => $cart_data, 'html' => $html, 'subtotal' => '$'.number_format( $total, 2)]);
            // echo json_encode(array('totalcart' => $totalcart, 'cart' => $cart_data)); die;
            // return;
        } else {
            $totalcart = "0";
            echo json_encode(array('totalcart' => $totalcart));
            die;
            return;
        }
    }
}
