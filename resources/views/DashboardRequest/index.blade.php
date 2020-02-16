@extends('layouts.layout-master', 
            [
                'expired' => $data['expired'],
                'dataTable' => 'on',
                'checkPoint' => 'dashboard',
                'pageTitle'=>'Application Dashboard',
                'mainPage1'=>'Dashboard',
            ]
        )
@section('content')
    @component('components.dashboard.index', $data)
        
    @endcomponent
@endsection