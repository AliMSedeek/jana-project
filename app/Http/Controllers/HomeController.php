<?php

namespace App\Http\Controllers;
use App\Models\Cake;
use App\Models\Topping;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function menu()
    {
       $cakes = Cake::all();
       return view('layout.menu', compact('cakes'));
    }

    public function index()
    {
       $cakes = Cake::all();
       return view('home', compact('cakes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layout.addcake');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'quantity' => 'required|integer',
]);

Topping::create($request->all());

return redirect()->route('cakes.index')->with('success', 'Cake Topping Add successfully.');

    }

    /**
     * Display the specified resource.
     */
 
}
