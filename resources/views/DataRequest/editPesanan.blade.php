@extends('layouts.layout-master', 
            [
                'expired' => $data['expired'],
                'dataTable' => 'on',
                'checkPoint' => 'report',
                'pageTitle'=>'Edit Pesanan' . $data['thisPesanan']['no_order'],
                'mainPage1'=>'Report',
                'mainPage2'=>'Detail Pemesanan '. $data['thisPesanan']['no_order'],
                'linkPage2'=>'detail-pemesanan/'.$data['thisPesanan']['uid'],
            ]
        )
@section('content')
    @component('components.data.editPesanan', $data)
        
    @endcomponent
@endsection