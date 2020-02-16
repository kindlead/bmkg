@extends('layouts.layout-master', 
            [
                'expired' => $data['expired'],
                'dataTable' => 'on',
                'checkPoint' => 'report',
                'pageTitle'=>'Data Pelanggan',
                'mainPage1'=>'Report',
            ]
        )
@section('content')
    @component('components.data.dataPelanggan', $data)
        
    @endcomponent
@endsection