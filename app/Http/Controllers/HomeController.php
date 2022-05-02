<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
      //  $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('welcome');
    }
    public function cart()
    {
        return view('cart');
    }
    public function checkout()
    {
        return view('checkout');
    }
    public function payment_success()
    {
        return view('payment_success');
    }
    public function promotion()
    {
        return view('promotion');
    }
    public function history()
    {
        return view('account.history');
    }
    public function invoice_detail()
    {
        return view('account.invoice_detail');
    }
    public function account()
    {
        return view('account.index');
    }
    public function contact()
    {
        return view('contact');
    }
    public function term()
    {
        return view('term');
    }
    public function how_to()
    {
        return view('how_to');
    }
    
    
    
    
    
}
