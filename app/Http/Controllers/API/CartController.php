<?php

namespace App\Http\Controllers\API;

use App\Cart;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addCartQuery($request){
        $items = json_decode($request->getContent(), true);

        if (isset($items)) {
            foreach($items['item'] as $item)
            {
                $cart=new Cart();
                $cart->user_id         = $item["user_id"];
                $cart->product_id      = $item["product_id"];
                $cart->quantity        = $item["quantity"];
                $cart->price           = $item["price"];
                $cart->total           = $item["total"];
                $cart->save();
            }
            return [];

        }else{
            return [];
        }
    }
    public function addCart(Request $request)
    {
        $cart = $this->addCartQuery($request);

        return response()->json([
            'error'    => 0,
            'errorMsg' => 'Added to Cart Successfully',
            'data'     => $cart
        ]);
    }
   /* public function addCart(Request $request){
        $cart=new Cart();
        $cart->user_id         = $request->user_id;
        $cart->product_id      = $request->product_id;
        $cart->subproduct_id   = $request->subproduct_id;
        $cart->store_id        = $request->store_id;
        $cart->quantity        = $request->quantity;
        $cart->price           = $request->price;
        $cart->cost            = $request->price * $request->quantity;
        $cart->save();
        return new CartResource([$cart]);
    }*/

 /*   public function editCart($id,Request $request){
        $cart= Cart::find($id);
        $cart->quantity        = $request->quantity;
        $cart->cost            = $cart->price * $request->quantity;
        $cart->save();
        return new CartResource([$cart]);
    }

    public function deleteCart(Request $request){
        $cart = Cart::find($request->id);
        $cart->delete();
        return new CartResource([$cart]);
    }*/

    public function cartList($user_id){
        $list= Cart::all()->where('user_id',$user_id);

        return response()->json([
            'error'    => 0,
            'errorMsg' => '',
            'data'     => $list
        ]);
    }

}
