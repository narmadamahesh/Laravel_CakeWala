<?php

namespace App\Http\Controllers\Admin;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
 use App\Http\Controllers\Frontend\FrontendController;
use App\Models\Category;

class OrderController extends Controller
{
    //
    public function index()
    {
         $orders=Order::where('status','0')->get();
        return view('admin.orders.index',compact('orders'));
    }

    public function view($id)
    {
        $orders= Order::with('orderitems')->find($id);
        // $orders= Order::where('id',$id)->first($id);

        return view('admin.orders.view' ,compact('orders'));
    }

    public function update(Request $request,$id)
    {
        $orders= Order::find($id);
        $orders->status= $request->input('status');
        $orders->update();
        return redirect('orders')->with('status',"Order Updated successfully");
    }

    public function history()
    {
        $orders=Order::where('status','1')->get();
        return view('admin.orders.history',compact('orders'));


    }


}
