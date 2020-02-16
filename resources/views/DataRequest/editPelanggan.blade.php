@extends('layouts.layout-master', 
            [
                'expired' => $data['expired'],
                'dataTable' => 'on',
                'checkPoint' => 'report',
                'pageTitle'=>'Edit Pelanggan ' . $data['thisPelanggan']['nama_perusahaan'],
                'mainPage1'=>'Report',
                'mainPage2'=>'Detail Pelanggan '. $data['thisPelanggan']['nama_perusahaan'],
                'linkPage2'=>'detail-pelanggan/'.$data['thisPelanggan']['uid'],
            ]
        )
@section('content')
    @component('components.data.editPelanggan', $data)
        
    @endcomponent
@endsection