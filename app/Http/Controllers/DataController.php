<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Pelanggan;
use App\Model\PesananKalibrasi;
use Carbon\Carbon;
use Datatables;

class DataController extends Controller
{
    public $expired = false;
    public $dateEnd = "2020-11-01";
    public function __construct(){
    if(Carbon::now()>=Carbon::parse($this->dateEnd))
        $this->expired = true;
    }
    public function tambahPesananKalibrasi(Request $request){
        if(!$request->all()){
            $data['expired'] = $this->expired;
            $data['pelanggan'] = Pelanggan::all();
            $data['pesanan'] = PesananKalibrasi::all();
            return view('DataRequest.tambahPesananKalibrasi', compact('data'));
        }
        if(PesananKalibrasi::where('no_order',$request->no_order)->first())
            return redirect('tambah-pesanan')->with('failed', 'Nomor order dideteksi duplikat, coba yang lain !');
        if(PesananKalibrasi::where('no_id',$request->no_id)->first())
            return redirect('tambah-pesanan')->with('failed', 'Nomor ID dideteksi duplikat, coba yang lain !');
        $insert = $request->all();
        $insert['tanggal_masuk'] = Carbon::parse($request->tanggal_masuk);
        $insert['tanggal_selesai'] = Carbon::parse($request->tanggal_selesai);
        PesananKalibrasi::create($insert);
        return redirect('tambah-pesanan')->with('success', 'Berhasil menambahkan pesanan !');
    }
    public function tambahPelanggan(Request $request){
        if(!$request->all()){
            $data['expired'] = $this->expired;
            return view('DataRequest.tambahPelanggan', compact('data'));
        }
        // Pelanggan::create($request->all());
        if($request->pelanggan_page == '0')
            return redirect('data-pelanggan')->with('success', 'Berhasil menambahkan pelanggan !');
        return redirect('tambah-pesanan')->with('success', 'Berhasil menambahkan pelanggan baru !');
    }
    public function pesananKalibrasiPage(){
        $data['expired'] = $this->expired;
        return view('DataRequest.pesananKalibrasiPage', compact('data'));
    }
    public function dataPelanggan(){
        $data['expired'] = $this->expired;
        return view('DataRequest.dataPelanggan', compact('data'));
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
        ->addColumn('status', function($data){
            if(Carbon::now()>=Carbon::parse($data['tanggal_selesai']))
                return '<span class="badge badge-success">Finished</span>';
            else
                return '<span class="badge badge-warning">On Process</span>';
            
        })
        ->addColumn('tanggal_selesai', function($data){
            return Carbon::parse($data['tanggal_selesai'])->format('F d, Y');
        })
        ->rawColumns(['action','status'])
        ->make(true);
    }
    public function dtPelanggan(){
        $data = Pelanggan::query();
        return Datatables::eloquent($data)
        ->addColumn('created_at', function($data){
            return Carbon::parse($data['created_at'])->format('F d, Y');
        })
        ->addColumn('action', function($data){
            $detail = "detail-pelanggan/".$data['uid'];
            $edit = "edit-pelanggan/".$data['uid'];
            $delete = "'delete-pelanggan/".$data['uid']."'";
            $message = "'Hapus'";
            $confirm = "'Tidak bisa mengembalikan data yang telah dihapus'";
            $data = [
                '<a href="'.$detail.'" class="btn btn-success text-center btn-sm p-1 text-white m-1"><i class="fas fa-eye"></i></a>',
                '<a href="'.$edit.'" class="btn btn-info text-center btn-sm p-1 text-white m-1"><i class="fas fa-edit"></i></a>',
                '<a href="#" onclick="confirm_me('.$delete.','.$message.','.$confirm.')" class="btn btn-danger text-center btn-sm p-1 text-white m-1"><i class="fas fa-trash"></i></a>',
            ];
            return $data[0].$data[1].$data[2];
        })
        ->rawColumns(['action'])
        ->make(true);
    }
    public function editPesanan(Request $request, $uid){
        if(!$request->all()){
            $data['expired'] = $this->expired;
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
        $data['expired'] = $this->expired;
        $data['thisPesanan'] = PesananKalibrasi::find($uid);
        $data['thisPesanan']['tanggal_masuk'] = Carbon::parse($data['thisPesanan']['tanggal_masuk'])->format('F d, Y');
        $data['thisPesanan']['tanggal_selesai'] = Carbon::parse($data['thisPesanan']['tanggal_selesai'])->format('F d, Y');
        return view('DataRequest.detailPesanan', compact('data'));
    }
    public function deletePesanan($uid){
        PesananKalibrasi::find($uid)->delete();
        return redirect('data-pesanan-kalibrasi')->with('success', 'Data berhasil dihapus !');
    }    
    public function detailPelanggan($uid){
        $data['expired'] = $this->expired;
        $data['thisPelanggan'] = Pelanggan::find($uid);
        return view('DataRequest.detailPelanggan', compact('data'));
    }
    public function deletePelanggan($uid){
        Pelanggan::find($uid)->delete();
        return redirect('data-pelanggan')->with('success', 'Data berhasil dihapus !');
    }
    public function editPelanggan(Request $request, $uid){
        $pelanggan = Pelanggan::find($uid);
        if(!$request->all()){
            $data['expired'] = $this->expired;
            $data['thisPelanggan'] = $pelanggan;
            return view('DataRequest.editPelanggan', compact('data'));
        }
        $pelanggan->nama_perusahaan = $request->nama_perusahaan;
        $pelanggan->jenis_perusahaan = $request->jenis_perusahaan;
        $pelanggan->no_tlp = $request->no_tlp;
        $pelanggan->email = $request->email;
        $pelanggan->alamat = $request->alamat;
        $pelanggan->save();
        return redirect('detail-pelanggan/'.$uid)->with('success', 'Data Pelanggan '.$pelanggan['nama_perusahaan']. ' berhasil diubah !');
    }


    // User View
    public function userView(){
        return view('UserView.userView');
    }
    public function userPesananRetrive(Request $request){

        $pesanan =  PesananKalibrasi::where('no_order',$request->no_order)->first();
        $pesanan['tanggal_masuk'] = Carbon::parse($pesanan['tanggal_masuk'])->format('F d, Y');
        $pesanan['tanggal_selesai'] = Carbon::parse($pesanan['tanggal_selesai'])->format('F d, Y');
        $status = false;
        if(Carbon::now()>=Carbon::parse($pesanan['tanggal_selesai']))
            $status = true;
        else
            $status = false;
        return view('UserView.retrivePesanan', [
            'pesanan' => $pesanan,
            'status' => $status,
        ]);
    }
}
