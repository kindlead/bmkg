<script>
    $(function(){
        $('#tablePOExist').DataTable({
            ajax: '/dtSeaPOExist', 
            columns: [
                { data: 'po_number', name: 'po_number', orderable:true, searchable: true },
                { data: 'customer', name: 'customer'},
                { data: 'negara', name: 'negara', orderable:true, searchable: true },
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
          