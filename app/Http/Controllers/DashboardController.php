<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class DashboardController extends Controller
{
    public function index(){
        $data['authData'] = "Session";
        return view('DashboardRequest.index', compact('data'));
    }
}
