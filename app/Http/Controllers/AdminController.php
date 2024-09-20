<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $userData = array();
        return view('pages.admin.dashboard', compact('userData'));
    }
}

?>