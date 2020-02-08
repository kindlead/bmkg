@extends('layouts.layout-master', 
            [
                'authData' => $data['authData'],
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