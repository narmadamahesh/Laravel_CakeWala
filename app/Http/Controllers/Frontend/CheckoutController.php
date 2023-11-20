<?php

namespace App\Http\Controllers\Frontend;


use Exception;
use App\Models\Cart;
use App\Models\User;
use App\Models\Order;
use Razorpay\Api\Api;

use App\Models\Category;
use App\Models\OrderItem;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Session;

class CheckoutController extends Controller
{
    //
    public $api;
    public function index()
    {
        $cartitems = Cart::where('userid', Auth::id())->get();

        return view('frontend.checkout', compact('cartitems'));
    }

    public function placeorder(Request $request)
    {
        $order = new Order();
        $order->userid = Auth::id();

        $request->validate([
           'fname'=> 'required',
           'lname'=> 'required',
           'email'=> 'required',
           'phone'=> 'required',
           'address1'=> 'required',
           'address2'=> 'required',
           'city'=> 'required',
           'state'=> 'required',
           'pincode'=> 'required',


        ]);





         $order->fname = $request->input('fname');
         $order->lname = $request->input('lname');
         $order->email = $request->input('email');
        $order->phone = $request->input('phone');
          $order->address1 = $request->input('address1');
         $order->address2 = $request->input('address2');
         $order->city = $request->input('city');
         $order->state = $request->input('state');
         $order->pincode = $request->input('pincode');

         $total=0;
         $cartitems_total= Cart::where('userid',Auth::id())->get();
         foreach($cartitems_total as $cakey)
         {
            $total += str_replace("₹", "", $cakey->cakes->selling_price) * $cakey ->cakequantity;

         }

             $order->totalprice= $total;

         $order->tracking_no = 'cakewala' . rand(1111, 9999);
        $order->save();

        $cartitems = Cart::where('userid', Auth::id())->get();
        foreach ($cartitems as $item) {
            OrderItem::create([
                'order_id' => $order->id,
                'cakeid' => $item->cakeid,
                'cakequantity' => $item->cakequantity,
                'price' => $item->cakes->selling_price,
            ]);

            $category=Category::where('id',$item->cakeid)->first();
            $category->quantity= $category->cakequantity - $item->cakequantity;
            $category->update();
        }

        // if (Auth::user()->address1 == NULL) {
        //     $user = User::where('id', Auth::id())->first();
        //     $user->name = $request->input('name');
        //     $user->lname = $request->input('lname');
        //     $user->phone = $request->input('phone');
        //     $user->address1 = $request->input('address1');

        //     $user->address2 = $request->input('address2');
        //     $user->city = $request->input('city');
        //     $user->state = $request->input('state');

        //     $user->pincode = $request->input('pincode');
        //     $user->update();

        // }
        $cartitems=Cart::where('userid',Auth::id())->get();
    Cart::destroy($cartitems);
     return redirect('/')->with('status',"Order Placed Successfully ");
    }




    /**
     * Write code on Method
     *
     * @return response()
     */
    public function store(Request $request)
    {


        $input = $request->all();

         $order = new Order();
         $order->userid = Auth::id();





          $order->fname = $request->input('fname');
          $order->lname = $request->input('lname');
          $order->email = $request->input('email');
         $order->phone = $request->input('phone');
           $order->address1 = $request->input('address1');
          $order->address2 = $request->input('address2');
          $order->city = $request->input('city');
          $order->state = $request->input('state');
          $order->pincode = $request->input('pincode');

          $total=0;
          $cartitems_total= Cart::where('userid',Auth::id())->get();
          foreach($cartitems_total as $cakey)
          {
             $total += str_replace("₹", "", $cakey->cakes->selling_price) * $cakey ->cakequantity;

          }

              $order->totalprice= $total;

          $order->tracking_no = 'cakewala' . rand(1111, 9999);
         $order->save();

         $cartitems = Cart::where('userid', Auth::id())->get();
         foreach ($cartitems as $item) {
             OrderItem::create([
                 'order_id' => $order->id,
                 'cakeid' => $item->cakeid,
                 'cakequantity' => $item->cakequantity,
                 'price' => $item->cakes->selling_price,
             ]);

             $category=Category::where('id',$item->cakeid)->first();
             $category->quantity= $category->cakequantity - $item->cakequantity;
             $category->update();
         }

         // if (Auth::user()->address1 == NULL) {
         //     $user = User::where('id', Auth::id())->first();
         //     $user->name = $request->input('name');
         //     $user->lname = $request->input('lname');
         //     $user->phone = $request->input('phone');
         //     $user->address1 = $request->input('address1');

         //     $user->address2 = $request->input('address2');
         //     $user->city = $request->input('city');
         //     $user->state = $request->input('state');

         //     $user->pincode = $request->input('pincode');
         //     $user->update();

         // }
         $cartitems=Cart::where('userid',Auth::id())->get();
     Cart::destroy($cartitems);



        $api = new Api(env('RAZORPAY_KEY'), env('RAZORPAY_SECRET'));

        $payment = $api->payment->fetch($input['razorpay_payment_id']);

        if(count($input)  && !empty($input['razorpay_payment_id'])) {
            try {
                $response = $api->payment->fetch($input['razorpay_payment_id'])->capture(array('amount'=>$payment['amount']));

            } catch (Exception $e) {
                return  $e->getMessage();
                Session::put('error',$e->getMessage());
                return redirect()->back();
            }
        }

        Session::put('success', 'Payment successful');
        return redirect('/')->with('status',"Amount Paid  Successfully ");


    }



}
