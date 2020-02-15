<!-- Required meta tags --> 
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>{{$title}}</title>
<!-- base:css -->
<link rel="stylesheet" media="all" href="{{asset('template-tools/vendors/mdi/css/materialdesignicons.min.css')}}">
<link rel="stylesheet" media="all" href="{{asset('template-tools/vendors/feather/feather.css')}}">
<link rel="stylesheet" media="all" href="{{asset('template-tools/vendors/base/vendor.bundle.base.css')}}">
<!-- endinject -->
<!-- plugin css for this page -->
<link rel="stylesheet" media="all" href="{{asset('template-tools/vendors/flag-icon-css/css/flag-icon.min.css')}}"/>
<link rel="stylesheet" media="all" href="{{asset('template-tools/vendors/font-awesome/css/font-awesome.min.css')}}">
<link rel="stylesheet" media="all" href="{{asset('template-tools/vendors/jquery-bar-rating/fontawesome-stars-o.css')}}">
<link rel="stylesheet" media="all" href="{{asset('template-tools/vendors/jquery-bar-rating/fontawesome-stars.css')}}">
<!-- End plugin css for this page -->
<!-- inject:css -->
<link rel="stylesheet" media="all" href="{{asset('template-tools/css/style.css')}}">
<link rel="stylesheet" media="all" href="{{asset('template-tools/css/rianutilities.css')}}">
<link rel="stylesheet" media="all" href="{{asset('template-tools/font-awesome/css/all.css')}}">
{{-- page has select --}}
{{-- <link rel="stylesheet" media="all" href="{{asset('template-tools/vendors/select2/select2.min.css')}}">
<link rel="stylesheet" media="all" href="{{asset('template-tools/vendors/select2-bootstrap-theme/select2-bootstrap.min.css')}}"> --}}
{{-- <link rel="stylesheet" media="all" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css">
<link rel="stylesheet" media="all" href="https://select2.github.io/select2-bootstrap-theme/css/select2-bootstrap.css"> --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.12/css/select2.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2-bootstrap-css/1.4.6/select2-bootstrap.min.css">
<!-- endinject -->
<link rel="shortcut icon" href="http://sj-transindo.com/images/Header/logo-header-sjt2.png" />
<link rel="stylesheet" media="all" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
{{-- JQUERY --}}


<script src="{{ asset('template-tools/jquery/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{asset('template-tools/jquery/jquery-1.11.3.min.js')}}"></script>
<script src="{{asset('template-tools/jquery/popper.min.js')}}" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="{{asset('template-tools/jquery/bootstrap.min.js')}}" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

{{-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> --}}

<script src="{{asset('template-tools/myalert/rianajax.js')}}"></script>
<!-- Bootstrap Date-Picker Plugin -->
<script type="text/javascript" src="{{asset('template-tools/jquery/bootstrap-datepicker.min.js')}}"></script>
<link rel="stylesheet" href="{{asset('template-tools/jquery/bootstrap-datepicker3.css')}}"/>
<!-- Sweet Alert -->
<script src="{{asset('template-tools/jquery/sweetalert2@8.js')}}"></script>
<script src="{{asset('template-tools/myalert/custom-me.js')}}"></script>
<script src="{{asset('template-tools/myalert/sweetalert.js')}}"></script>
<!-- End custom js for this page-->
<style>
.select2-container .select2-selection--single {height: 35px !important; line-height:-10px !important;}
.select2-selection__arrow {
    height: 34px !important;
}
.select2-selection__rendered {
    line-height: 10px !important;
}

/* input {
    width:400px;
    border: solid 1px #06f;
    border-radius:100px 0 0 100px;
    padding-left:10px;
    font-size: 12px;
    height:30px;
    background:rgba(0,0,0,0.1);
    margin-right:8px;
    color: #06f;
} */
.dataTables_wrapper .dataTables_paginate .paginate_button{
    padding: 6px;
    line-height: 20px;
    border:none;
    background:#06f;
}
.dataTables_wrapper .dataTables_paginate .paginate_button:hover {
  background: #06f;
  color: black!important;
  border-radius: 4px;
  border: 1px solid #828282;
}
 
.dataTables_wrapper .dataTables_paginate .paginate_button:active {
  background: none;
  color: black!important;
}

</style>
