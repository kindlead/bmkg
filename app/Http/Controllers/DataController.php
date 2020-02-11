<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Pelanggan;
use App\Model\PesananKalibrasi;
use Carbon\Carbon;
use Datatables;

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
    public function dtPesananKalibrasi(){
        $data = PesananKalibrasi::query();
        return Datatables::eloquent($data)
        ->addColumn('nama_pelanggan', function($data){
            return $data['nama_pelanggan'];
        })
        ->addColumn('action', function($data){
            $detail = "detail-pemesanan/".$data['uid'];
            $edit = "edit-pesanan/".$data['uid'];
            $delete = "'delete-pesanan/".$data['uid']."'";
            $message = "'Hapus'";
            $confirm = "'Tidak bisa mengembalikan data yang telah dihapus'";
            $data = [
                '<a href="'.$detail.'" class="btn btn-success text-center btn-sm p-1 text-white m-1"><i class="fas fa-eye"></i></a>',
                '<a href="'.$edit.'" class="btn btn-info text-center btn-sm p-1 text-white m-1"><i class="fas fa-edit"></i></a>',
                '<a href="#" onclick="confirm_me('.$delete.','.$message.','.$confirm.')" class="btn btn-danger text-center btn-sm p-1 text-white m-1"><i class="fas fa-trash"></i></a>',
            ];
            return $data[0].$data[1].$data[2];
        })
        ->addColumn('tanggal_masuk', function($data){
            return Carbon::parse($data['tanggal_masuk'])->format('F d, Y');
        })
        ->addColumn('tanggal_selesai', function($data){
            return Carbon::parse($data['tanggal_selesai'])->format('F d, Y');
        })
        ->rawColumns(['action'])
        ->make(true);
    }
    public function editPesanan(Request $request, $uid){
        if(!$request->all()){
            $data['authData'] = "Session";
            $data['thisPesanan'] = PesananKalibrasi::find($uid);
            $data['pelanggan'] = Pelanggan::all();
            return view('DataRequest.editPesanan', compact('data'));
        }
        $pesanan = PesananKalibrasi::find($uid);
        $pesanan->no_order = $request->no_order;
        $pesanan->no_id = $request->no_id;
        $pesanan->nama_alat = $request->nama_alat;
        $pesanan->uid_pelanggan = $request->uid_pelanggan;
        $pesanan->spesifikasi = $request->spesifikasi;
        $pesanan->tanggal_masuk = $request->tanggal_masuk;
        $pesanan->tanggal_selesai = $request->tanggal_selesai;
        if($pesanan->save())
            return redirect('detail-pemesanan/'.$pesanan['uid'])->with('success','Berhasil mengedit Pesanan untuk Nomor Order '.$pesanan['no_order']);
    }
    public function detailPesanan($uid){
        $data['authData'] = 'Session';
        $data['thisPesanan'] = PesananKalibrasi::find($uid);
        $data['thisPesanan']['tanggal_masuk'] = Carbon::parse($data['thisPesanan']['tanggal_masuk'])->format('F d, Y');
        $data['thisPesanan']['tanggal_selesai'] = Carbon::parse($data['thisPesanan']['tanggal_selesai'])->format('F d, Y');
        return view('DataRequest.detailPesanan', compact('data'));
    }
    public function deletePesanan($uid){
        PesananKalibrasi::find($uid)->delete();
        return redirect('data-pesanan-kalibrasi')->with('success', 'Data berhasil dihapus !');
    }
}
