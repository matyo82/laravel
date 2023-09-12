<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders=Order::orderBy('id','desc')->get();
        return view('admin.orders.list',compact('orders'));
    }
	
	public function showFactor(Order $order)
	{
        return view('admin.orders.show-factor',compact('order'));
	}	
	
	public function details(Order $order)
	{
        return view('admin.orders.details',compact('order'));
	}
}
