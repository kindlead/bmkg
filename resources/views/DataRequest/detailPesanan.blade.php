@extends('layouts.layout-master', 
            [
                'expired' => $data['expired'],
                'dataTable' => 'on',
                'checkPoint' => 'report',
                'pageTitle'=>'Detail Pesanan',
                'mainPage1'=>'Report',
                'mainPage2'=>'Data Pemesanan',
                'linkPage2'=>'data-pesanan-kalibrasi',
            ]
        )
@section('content')
    @component('components.data.detailPesanan', $data)
        
    @endcomponent
@endsection