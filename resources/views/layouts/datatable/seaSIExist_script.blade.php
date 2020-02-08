<script>
    $(function(){
        $('#tableSIExist').DataTable({
            ajax: '/dtSIExist', 
            columns: [
                { data: 'shipper_name', name: 'shipper_name', orderable:true, searchable: true },
                { data: 'detail', name: 'detail' },
            ],
            language: {
            searchPlaceholder: 'Search...',
            sSearch: '',
            lengthMenu: '_MENU_ items/page',
            destroy: true
            },
            
            dom: 'Bfrtip',  
            buttons: [  
            'copy', 'csv', 'excel', 'pdf', 'print'  
            ],
            "bDestroy": true,
            "processing": true,
            "serverSide": true, 
        }).fnDestroy();

        // $('.dataTables_length select').select2({ minimumResultsForSearch: Infinity });

});
</script>
          