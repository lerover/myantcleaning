<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\User;

class OrderController extends Controller
{
    public function index(){
        $orders = Order::all();
        $customers = User::all();
        return view('admin.order.index',compact('orders','customers'));
    }
}
