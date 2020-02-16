@extends('layouts.layout-master', 
            [
                'expired' => $data['expired'],
                'dataTable' => 'on',
                'checkPoint' => 'report',
                'pageTitle'=>'Data Pesanan',
                'mainPage1'=>'Report',
            ]
        )
@section('content')
    @component('components.data.pesananKalibrasiPage', $data)
        
    @endcomponent
@endsection