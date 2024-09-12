<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BusinessInfoController extends Controller
{
    function index()
    {
        $userData = array();
        return view('pages.home', compact('userData'));
    }

    function addInfo()
    {
        $userData = array();
        return view('pages.add_business', compact('userData'));
    }
    function store(Request $request)
    {
        $userData = array();
        return $userData;
    }
    function listing()
    {
        $userData = array();
        return view('pages.listing', compact('userData'));
    }
    function detais(Request $request)
    {
        $userData = array();
        return view('pages.details', compact('userData'));
    }
}
