@extends('layouts.layout-master', 
            [
                'authData' => $data['authData'],
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