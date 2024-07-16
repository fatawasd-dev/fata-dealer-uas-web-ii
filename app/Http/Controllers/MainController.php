<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Vehicle;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(Request $request)
    {
        $filter = $request->input('filter');
        $query = Vehicle::query();

        if ($filter) {
            $query->where('type', $filter);
        }
        $companyInfo = Company::first();
        $featuredVehicles = Vehicle::inRandomOrder()->limit(3)->get();
        $vehicles = $query->inRandomOrder()->get();
        return view('welcome', compact('companyInfo', 'featuredVehicles', 'vehicles'));
    }
}
