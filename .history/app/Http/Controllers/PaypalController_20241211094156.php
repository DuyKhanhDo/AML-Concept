<?php

namespace App\Http\Controllers;

use App\Models\Subscription;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class PaypalController extends Controller
{
    public function storeSubscription(Request $request){
        $subscriptionID = $request->subscription_id;
        $userID = Auth::user()->id;

        console.log

        Subscription::create([
            'user_id' => $userID,
            'subscriptionID' => $subscriptionID
        ]);
    }
}