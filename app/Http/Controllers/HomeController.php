<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicle;
use Barryvdh\DomPDF\Facade\Pdf;

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


    public function showForm($id = null)
    {
        $vehicle = $id ? Vehicle::find($id) : null;
        return view('home', compact('vehicle'));
    }

    public function store(Request $request)
    {
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
    
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'type' => 'required',
            'brand' => 'required',
            'model' => 'required',
            'price' => 'required|numeric',
            'year' => 'required|numeric',
            'color' => 'required',
            'description' => 'required',
            'image' => 'nullable|image',
        ]);

        $vehicle = Vehicle::find($id);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imagePath = $image->store('images', 'public');
            $data['image'] = $imagePath;
        } else {
            unset($data['image']);
        }

        $vehicle->update($data);

        return redirect()->route('home')->with('status', 'Vehicle updated successfully!');
    }

    public function destroy($id)
    {
        $vehicle = Vehicle::find($id);
        $vehicle->delete();

        return redirect()->route('home')->with('status', 'Vehicle deleted successfully!');
    }

    public function exportPdf() {
        $vehicles = Vehicle::all();
        $pdf = Pdf::loadView('export', compact('vehicles'));
        $fileName = 'list-vehicle-' . date('dmYHis') . '-' . uniqid() . '.pdf';

        return $pdf->download($fileName);
    }
}
