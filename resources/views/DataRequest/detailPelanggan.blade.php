@extends('layouts.layout-master', 
            [
                'authData' => $data['authData'],
                'dataTable' => 'on',
                'checkPoint' => 'report',
                'pageTitle'=>'Detail Pelanggan',
                'mainPage1'=>'Report',
                'mainPage2'=>'Data Pelanggan',
                'linkPage2'=>'data-pelanggan',
            ]
        )
@section('content')
    @component('components.data.detailPelanggan', $data)
        
    @endcomponent
@endsection