<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $companyInfo = Company::first();
        return view('welcome', compact('companyInfo'));
    }
}
