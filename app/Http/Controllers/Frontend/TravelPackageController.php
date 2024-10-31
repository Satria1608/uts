<?php

namespace App\Http\Controllers\Frontend;

use App\Models\TravelPackage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TravelPackageController extends Controller
{
    //
    public function index()
    {
        $travel_packages = TravelPackage::get();
        return view('frontend.travel.index', compact('travel_packages'));
    }

    public function show(TravelPackage $travel_package)
    {
        return view('frontend.travel.show', compact('travel_package'));
    }
}
