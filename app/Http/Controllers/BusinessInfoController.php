<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BusinessInfoController extends Controller
{
    public function index()
    {
        $userData = array();
        return view('pages.home', compact('userData'));
    }

    public function addInfo()
    {
        $userData = array();
        return view('pages.add_business', compact('userData'));
    }
    public function store(Request $request)
    {
        $userData = array();
        return $userData;
    }
    public function listing()
    {
        $userData = array();
        return view('pages.listing', compact('userData'));
    }
    public function bus_details(Request $request)
    {
        $userData = array();
        return view('pages.details', compact('userData'));
    }
}
