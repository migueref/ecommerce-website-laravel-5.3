<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ShoppingCart;
use App\PayPal;
use App\Order;

class PaymentsController extends Controller
{
    public function store(Request $request){
      $shopping_cart_id= \Session::get('shopping_cart_id');
      $shopping_cart = ShoppingCart::findOrCreateBySessionID($shopping_cart_id);

      $paypal = new PayPal($shopping_cart);
      $response = $paypal->execute($request->paymentId,$request->PayerID);
      if($response->state == "approved") {
        //we can execute the payment
        $order = Order::createFromPayPalResponse($response,$shopping_cart);

      }
      dd($order);
    }
}
