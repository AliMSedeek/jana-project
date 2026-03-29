<?php

namespace App\Http\Controllers;

use App\Models\Cake;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index() {
        $cart = session()->get('cart', []);
        return view('layout.cart', compact('cart'));
    }

    public function addToCart($id) {
        $cake = Cake::findOrFail($id);
        $cart = session()->get('cart', []);

        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "name"        => $cake->name,
                "quantity"    => 1,
                "price"       => $cake->price,
                "image"       => $cake->image,
                "description" => $cake->description,
            ];
        }

        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product added to cart! 🛒');
    }

    public function update(Request $request) {
        if($request->id && $request->quantity) {
            $cart = session()->get('cart');
            $cart[$request->id]['quantity'] = $request->quantity;
            session()->put('cart', $cart);
        }
        return redirect()->route('cart.index')->with('success', 'Cart updated successfully! ✅');
    }

    public function remove(Request $request) {
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
        }
        return redirect()->route('cart.index')->with('success', 'Product removed from cart! 🗑️');
    }
}