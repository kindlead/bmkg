@extends('layouts.layout-master', 
            [
                'authData' => $data['authData'],
                'dataTable' => 'on',
                'checkPoint' => 'report',
                'pageTitle'=>'Detail Pesanan',
                'mainPage1'=>'Report',
            ]
        )
@section('content')
    @component('components.data.detailPesanan', $data)
        
    @endcomponent
@endsection