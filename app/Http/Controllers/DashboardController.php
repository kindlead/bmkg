<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Model\Pelanggan;
use App\Model\PesananKalibrasi;

class DashboardController extends Controller
{
    public function index(){
        $data['authData'] = "Session";
        $data['pelanggan'] = Pelanggan::all();
        $data['pesanan'] = PesananKalibrasi::all();
        return view('DashboardRequest.index', compact('data'));
    }
}
