<script>
    $(function(){
        $('#customerData').DataTable({
            ajax: '/dtCustomerData', 
            columns: [
                { data: 'nama', name: 'nama', orderable:true, searchable: true },
                { data: 'email', name: 'email', orderable:true, searchable: true },
                { data: 'no_telepon', name: 'no_telepon'},
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
          