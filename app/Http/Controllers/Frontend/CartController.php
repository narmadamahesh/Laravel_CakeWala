<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Cart;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use DB;
use SebastianBergmann\CodeUnit\FunctionUnit;

class CartController extends Controller
{
    //
    public function addcake(Request $request)
    {
        $cakeid = $request->input('cakeid');

        $cakequantity = $request->input('cakequantity');


        if (Auth::check()) {
            $pro_check = Category::where('id', $cakeid)->first();


            if ($pro_check) {
                if (Cart::where('cakeid', $cakeid)->where('userid', Auth::id())->exists()) {
                    return response()->json(['status' => $pro_check->cakename . " Already Added to cart"]);
                } else {
                    $cartItem = new Cart();
                    $cartItem->cakeid = $cakeid;
                    $cartItem->userid = Auth::id();
                    $cartItem->cakequantity = $cakequantity;
                    $cartItem->save();
                    return response()->json(['status' => $pro_check->cakename . "Added to cart"]);
                }
            }
        } else {
            return response()->json(['status' => 'Login to Continue']);
        }
    }

    public function viewcart()
    {
        $cartitems = Cart::where('userid', Auth::id())->get();
        return view('frontend.cart', compact('cartitems'));
    }

    public function updatecake(Request $request)
    {
        $cakeid = $request->input('cakeid');

        $cakequantity = $request->input('cakequantity');


        if (Auth::check())
         {
            if (Cart::where('cakeid', $cakeid)->where('userid', Auth::id())->exists()) {
                $cart = Cart::where('cakeid', $cakeid)->where('userid', Auth::id())->first();

                $cart->cakequantity= $cakequantity;
                $cart->update();
                return  response()->json(['status' => "Cart Updated successfully "]);
            }
        }
    }
    public function deletecake(Request $request)


    {
        if (Auth::check()) {
            $cakeid = $request->input('cakeid');
            if (Cart::where('cakeid', $cakeid)->where('userid', Auth::id())->exists()) {
                $cartitems = Cart::where('cakeid', $cakeid)->where('userid', Auth::id())->first();
                $cartitems->delete();
                return  response()->json(['status' => " Deleted successfully "]);
            }
        } else {

            return  response()->json(['status' => "Login to Continue"]);
        }
    }
}
