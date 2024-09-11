<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index()
    {
        $sessionData = session()->all();
        $cartItems = session()->get('cart', []);
                $total = 0;
                $deliveryCharge = 50; // Delivery charge in Taka
                foreach ($cartItems as $item) {
                    $total += $item['price'];
                }
                $finalTotal = $total + $deliveryCharge;
                session()->put('total_price', $finalTotal);

        return view('exampleEasycheckout', compact('sessionData', 'cartItems'));
    }

    public function getSession(Request $request)
    {



        $total_price = session()->get('total_price');

        $stripe = new \Stripe\StripeClient('sk_test_51NfeDnEOWXOhaJD82aK2SkjrpsnSxvr2aXpHEb9l3eY1XFIgt0qlFgPaftWDwFZ0wHrS8GtaDP2k4uyy6KfP9QK500DWLORx6Y');

        $checkout_session = $stripe->checkout->sessions->create([
            'success_url' => route('payment.success'), // Use the route helper for dynamic URLs
            'cancel_url' => route('payment.failed'), // Use the route helper for dynamic URLs
            'line_items' => [
                [
                    'price_data' => [
                        'currency' => "usd",
                        'unit_amount' => $request->customer_amount,
                        'product_data' => [
                            'name' => 'Hello world product'
                        ]
                    ],
                    'quantity' => 1,
                ]
            ],
            'mode' => 'payment',
        ]);

        return redirect()->away($checkout_session->url);
    }

}
