<?php

namespace App\Http\Controllers;


use DB;
use App\Day;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class DaysController extends Controller
{
    // public function home()
    // {
    //     return view('home');
    // }

    public function index()
    {
        $days = Day::all();
        
        return view('days', compact('days'));

    }

    public function show(Day $day)
    {
        // $day = Day::find($id);

        return view('daysToOrder.show', compact('day'));
    }

    

    public function service()
    {
        $user = User::all();
        //return $user;
        //return view('service');
        return view('service', compact('user'));
    }

    public function form()
    {
        
        return view('form');
    }
}
