<script>
    $(function(){
        $('#pesanan_kalibrasi').DataTable({
            ajax: 'dtPesananKalibrasi', 
            columns: [
                { data: 'nama_pelanggan', name: 'nama_pelanggan', orderable:true, searchable: true },
                { data: 'no_order', name: 'no_order', orderable:true, searchable: true },
                { data: 'nama_alat', name: 'nama_alat', orderable:true, searchable: true },
                { data: 'tanggal_masuk', name: 'tanggal_masuk', orderable:true, searchable: true },
                { data: 'tanggal_selesai', name: 'tanggal_selesai', orderable:true, searchable: true },
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
                    "targets" : [5],
                    "className": "text-center"
                },
            ],

            // aaSorting: [[1, 'desc']],
            
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
          