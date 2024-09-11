<?php

namespace App\Http\Controllers;

use App\Models\Eshowcase;
use App\Models\SiteSetting;
use Illuminate\Database\Eloquent\Casts\Json;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function show()
    {

        $cart = Session::get('cart', []);
        $cart_total = array_reduce($cart, function ($carry, $item) {
            return $carry + ($item['price'] * $item['quantity']);
        }, 0);

        return view('cart', ['cart' => $cart, 'cart_total' => $cart_total]);
    }

    public function update($id, $quantity)
    {




        $check='';
        $cart = Session::get('cart');

        if (isset($cart[$id])) {
            if(str_contains($quantity, 'de')){
                $cart[$id]['quantity']--;

            } else {
                $cart[$id]['quantity']++;
            }
            Session::put('cart', $cart);
        }




        return response()->json(['success' => true, 'cart'=>$cart, ]);

    }

    public function remove($id)
    {
        $cart = Session::get('cart', []);

        if (isset($cart[$id])) {
            unset($cart[$id]);
            Session::put('cart', $cart);
        }

        $cart_total = array_reduce($cart, function ($carry, $item) {
            return $carry + ($item['price'] * $item['quantity']);
        }, 0);

        return response()->json(['success' => true, 'cart_total' => $cart_total]);
    }

    // CartController.php

    public function add($id)
    {
        $product = Eshowcase::findOrFail($id);
        $cart = Session::get('cart', []);

        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                'name' => $product->name,
                'price' => $product->price,
                'quantity' => 1,
                'image' => $product->image
            ];
        }

        Session::put('cart', $cart);

        $counts = 0;
        //
        foreach($cart as $key => $value){
            $counts += $value['quantity'];
        };


        return response()->json(['success' => true, 'cart_added_number'=>$counts]);
    }


    public function view()
    {
        $siteSetting = Cache::remember('siteSetting', 60, function () {
            return SiteSetting::first();
        });
        $cart = Session::get('cart', []);
        $cartCount = count($cart);

        return view('front-end.pages.e-showcase.cardview',
        [
            'cart' => $cart,
            'cartCount' => $cartCount,
            'siteSetting' => $siteSetting,
        ]);
    }

}
