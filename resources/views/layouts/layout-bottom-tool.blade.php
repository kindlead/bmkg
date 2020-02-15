<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.12/js/select2.min.js"></script>



<script>
    $(document).ready(function(){
        $( '.uang' ).mask('0.000.000.000.000.000.000.000', {reverse: true});
        setTimeout(function() {
            $('#flash').fadeOut('fast');
        }, 1000);

        $(".select2single").select2({
            allowClear:true,
            placeholder: 'Option',
            width: '100%',
        });
    });
</script>
{{-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> --}}

<!-- endinject -->
<!-- Plugin js for this page-->
<!-- End plugin js for this page-->
<!-- inject:js -->
<script src="{{asset('template-tools/js/off-canvas.js')}}"></script>
<script src="{{asset('template-tools/js/hoverable-collapse.js')}}"></script>
<script src="{{asset('template-tools/js/template.js')}}"></script>
<!-- endinject -->
<!-- plugin js for this page -->
<script src="{{asset('template-tools/vendors/chart.js/Chart.min.js')}}"></script>
<script src="{{asset('template-tools/vendors/jquery-bar-rating/jquery.barrating.min.js')}}"></script>
<!-- End plugin js for this page -->
<!-- Custom js for this page-->
<script src="{{asset('template-tools/js/dashboard.js')}}"></script>

<!-- plugin js for this page -->
<script src="{{asset('template-tools/vendors/typeahead.js/typeahead.bundle.min.js')}}"></script>
<script src="{{asset('template-tools/vendors/select2/select2.min.js')}}"></script>
<!-- End plugin js for this page -->
<script src="{{asset('template-tools/js/file-upload.js')}}"></script>
<script src="{{asset('template-tools/js/typeahead.js')}}"></script>
<script src="{{asset('template-tools/js/select2.js')}}"></script>



{{-- Datatable --}}
@if($dataTable == 'on')
    <script src="{{asset('template-tools/datatable-rian/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('template-tools/datatable-rian/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('template-tools/datatable-rian/buttons.flash.min.js')}}"></script>
    <script src="{{asset('template-tools/datatable-rian/jszip.min.js')}}"></script>
    <script src="{{asset('template-tools/datatable-rian/pdfmake.min.js')}}"></script>
    <script src="{{asset('template-tools/datatable-rian/vfs_fonts.js')}}"></script>
    <script src="{{asset('template-tools/datatable-rian/buttons.html5.min.js')}}"></script>
    <script src="{{asset('template-tools/datatable-rian/buttons.print.min.js')}}"></script>

@endif

{{-- Datepicker --}}
<script src="{{asset('template-tools/datepicker/riandatepicker.js')}}"></script>


{{-- Content --}}
@if($title == "report")
    @component('components.data.datatable-pesanan-kalibrasi')@endcomponent
    @component('components.data.datatable-pelanggan')@endcomponent
@endif





