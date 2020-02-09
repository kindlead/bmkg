<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Pelanggan;
use App\Model\PesananKalibrasi;
use Carbon\Carbon;

class DataController extends Controller
{
    public function tambahPesananKalibrasi(Request $request){
        if(!$request->all()){
            $data['authData'] = "Session";
            $data['pelanggan'] = Pelanggan::all();
            $data['pesanan'] = PesananKalibrasi::all();
            return view('DataRequest.tambahPesananKalibrasi', compact('data'));
        }
        $insert = $request->all();
        $insert['tanggal_masuk'] = Carbon::parse($request->tanggal_masuk);
        $insert['tanggal_selesai'] = Carbon::parse($request->tanggal_selesai);
        PesananKalibrasi::create($insert);
        return redirect('tambah-pesanan')->with('success', 'Berhasil menambahkan pesanan !');
    }
    public function tambahPelanggan(Request $request){
        Pelanggan::create($request->all());
        return redirect('tambah-pesanan')->with('success', 'Berhasil menambahkan pelanggan baru !');
    }

    public function pesananKalibrasiPage(){
        $data['authData'] = "session";
        $data['pesanan'] = PesananKalibrasi::all();
        return view('DataRequest.pesananKalibrasiPage', compact('data'));
    }
    public function detailPesanan($id){
        $data['authData'] = 'Session';
        $data['thisPesanan'] = PesananKalibrasi::find($id);
        return view('DataRequest.detailPesanan', compact('data'));
    }
    public function deletePesanan($id){
        PesananKalibrasi::find($id)->delete();
        return redirect('data-pesanan-kalibrasi')->with('success', 'Data berhasil dihapus !');
    }
}
