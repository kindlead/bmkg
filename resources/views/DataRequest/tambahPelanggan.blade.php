@extends('layouts.layout-master', 
            [
                'authData' => $data['authData'],
                'dataTable' => 'on',
                'checkPoint' => 'manage_data',
                'pageTitle'=>'Tambah Pelanggan',
                'mainPage1'=>'Manage Data',
            ]
        )
@section('content')
    @component('components.data.tambahPelanggan', $data)
        
    @endcomponent
@endsection