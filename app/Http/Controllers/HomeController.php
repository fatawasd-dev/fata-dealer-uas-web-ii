<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicle;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $vehicles = Vehicle::all();
        return view('index', compact('vehicles'));
    }

    public function store(Request $request) {
        $request->validate([
            'type' => 'required',
            'brand' => 'required',
            'model' => 'required',
            'price' => 'required|numeric',
            'year' => 'required|integer',
            'color' => 'required',
            'description' => 'required',
            'image' => 'required|image'
        ]);
        
        $image = $request->file('image');
        $imagePath = $image->store('images', 'public');
        Vehicle::create([
            'type' => $request->type,
            'brand' => $request->brand,
            'model' => $request->model,
            'price' => $request->price,
            'year' => $request->year,
            'color' => $request->color,
            'description' => $request->description,
            'image' => $imagePath,
        ]);

        return redirect()->route('home')->with('status', 'Vehicle created successfully!');
    }
}
