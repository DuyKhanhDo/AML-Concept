<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Charge;
use Stripe\Customer;
use Stripe\Subscription;

class StripeController extends Controller
{
    public function createCheckoutSession(Request $request){
        Stripe::setApiKey(env('STRIPE_SECRET'));

        try{
            $session = Session::create([
                'payment_method_types' => ['card'],
                'line_items' => [
                    [
                        'price_data' => [
                            'currency' => 'usd',
                            'product_data' => [
                                
                            ]
                        ]
                    ]
                ]
            ])
        }

    }
}