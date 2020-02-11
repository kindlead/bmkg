@extends('layouts.layout-master', 
            [
                'authData' => $data['authData'],
                'dataTable' => 'on',
                'checkPoint' => 'report',
                'pageTitle'=>'Detail Pesanan',
                'mainPage1'=>'Report',
                'mainPage2'=>'Daata Pemesanan',
                'linkPage2'=>'data-pesanan-kalibrasi',
            ]
        )
@section('content')
    @component('components.data.detailPesanan', $data)
        
    @endcomponent
@endsection