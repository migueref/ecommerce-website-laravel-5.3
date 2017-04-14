<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ShoppingCart;
use App\PayPal;

class PaymentsController extends Controller
{
    public function store(Request $request){
      $shopping_cart_id= \Session::get('shopping_cart_id');
      $shopping_cart = ShoppingCart::findOrCreateBySessionID($shopping_cart_id);

      $paypal = new PayPal($shopping_cart);
      dd($paypal->execute($request->paymentId,$request->PayerID));
    }
}
