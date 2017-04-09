<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShoppingCart extends Model
{
    protected $fillable = ["status"];
    public static function findOrCreateBySessionID($shopping_cart_id){
      if($shopping_cart_id)
        //search if exists shop cart with this id
        return ShoppingCart::findBySession($shopping_cart_id);
      else
        //create new shop cart
        return ShoppingCart::createWithoutSession();

    }
    public static function findBySession($shopping_cart_id){
      return ShoppingCart::find($shopping_cart_id);
    }
    public static function createWithoutSession(){
      return ShoppingCart::create([
        "status"=>"incompleted"
      ]);
    }
}
