@extends('layouts.layout-master', 
            [
                'authData' => $data['authData'],
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