<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    
    public function index()
    {
        if (!session('cart') || count(session('cart')) == 0) {
            return redirect()->route('cart.index')->with('error', 'Your cart is empty!');
        }

        return view('layout.checkout');
    }

    public function store(Request $request)
    {
        $request->validate([
            'first_name'     => 'required|string|max:100',
            'last_name'      => 'required|string|max:100',
            'email'          => 'required|email',
            'address'        => 'required|string',
            'city'           => 'required|string',
            'country'        => 'required|string',
            'payment_method' => 'required|string',
        ]);

        session()->forget('cart');

        return redirect()->route('cakes.index')->with('success', 'Order placed successfully! 🎉');
    }
}