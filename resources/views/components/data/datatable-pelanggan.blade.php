<script>
    $(function(){
        $('#data_pelanggan').DataTable({
            ajax: 'dtPelanggan', 
            columns: [
                { data: 'nama_perusahaan', name: 'nama_perusahaan', orderable:true, searchable: true },
                { data: 'no_tlp', name: 'no_tlp', orderable:true, searchable: true },
                { data: 'email', name: 'email', orderable:true, searchable: true },
                { data: 'created_at', name: 'created_at', orderable:true, searchable: true },
                { data: 'action', name: 'action', orderable:true, searchable: true },
            ],
            language: {
            searchPlaceholder: 'Order Number',
            sSearch: '',
            lengthMenu: '_MENU_ items/page',
            destroy: true
            },

            columnDefs:[
                {
                    "targets" : [3],
                    "className": "text-center"
                },
            ],

            aaSorting: [[3, 'desc']],
            
            dom: 'Bfrtip',  
            buttons: [  
            'copy', 'csv', 'excel', 'pdf', 'print'  
            ],
            "bDestroy": true,
            "processing": true,
            "serverSide": true, 
        });

});
</script>
          