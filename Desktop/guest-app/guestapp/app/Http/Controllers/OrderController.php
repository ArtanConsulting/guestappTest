<?php

namespace App\Http\Controllers;

use App\Day;
use App\Order;
use App\User;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class OrderController extends Controller
{
    public function storeOrder(Request $request, $id)
    {
        
        $order = new Order;
        $order = new Order($request->all());
        $day = Day::find($id);
        $order->by(\Auth::user());
        $day->orders()->save($order);
        return back();
    }

//Receiving Orders /////////////////////////////
    public function weekOrder()
    {
        // $week = Day::all();
       $week = Day::with('orders')->get();
       $week->load('orders.day');
       //return $week;
        return view('receivedOrder.todoslist', compact('week'));

    }

    public function showOrders(Request $request, $id)
    {
        
        $day = Day::with('orders')->find($id);
        $day->load('orders.day');
       //return $day;
        return view('receivedOrder.showOrders', compact('day'));
    }
    
}