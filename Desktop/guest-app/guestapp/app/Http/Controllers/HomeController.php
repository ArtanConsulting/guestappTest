<?php

namespace App\Http\Controllers;


use DB;
use App\Day;
use App\Order;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('service');
    }


    public function menu(Day $day)
    {
        $day=Day::all();
        //return $days;
        return view('week.menu', compact('day'));
    }

    public function editMenu(Day $day)
    {
       
        return view('week.editShowMenu', compact('day'));
    }

    public function update(Request $request, Day $day)
    {

        $day->update($request->all());
        
        return redirect('menu');
    }

     public function destroyOrder(Request $request, $id)
    {
        $order = Order::find($id);
        $order->delete();
        return back();
         
        //return redirect()->route('orders', [$order->day_id]);
        
    }
    
}








