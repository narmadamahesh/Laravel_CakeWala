<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;


class UserController extends Controller
{
    //

    public function index()
    {
        $orders = Order::where('userid', Auth::id())->get();
        return view('frontend.orders.index', compact('orders'));
    }

    public function view($id)
    {
        $orders = Order::where('id', $id)->where('userid', Auth::id())->first();
        return view('frontend.orders.view', compact('orders'));
    }
}
