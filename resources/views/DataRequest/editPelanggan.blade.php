@extends('layouts.layout-master', 
            [
                'authData' => $data['authData'],
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