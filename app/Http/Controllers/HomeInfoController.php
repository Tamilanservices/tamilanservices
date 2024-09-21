<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\District;
use App\Models\BusinessInfo;
use Illuminate\Http\Request;

class HomeInfoController extends Controller
{
    public function index()
    {
        $districts = District::where('status', 'Y')->get();
        return view('pages.home', compact('districts'));
    }
}
