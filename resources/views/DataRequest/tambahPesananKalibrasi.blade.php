@extends('layouts.layout-master', 
            [
                'expired' => $data['expired'],
                'dataTable' => 'on',
                'checkPoint' => 'manage_data',
                'pageTitle'=>'Tambah Pesanan Kalibarsi',
                'mainPage1'=>'Manage Data',
            ]
        )
@section('content')
    @component('components.data.tambahPesananKalibrasi', $data)
        
    @endcomponent
@endsection