@if(session('success'))
    <script>
        infosuccess('{{session('success')}}');
    </script>
@endif
<div class="col-md-12 col-lg-12">
    <div class="card">
        <div class="card-body">
            <h4>Data Pemesanan</h4>
            <span class="fs12">Menampilkan Semua Data Pemesanan</span> <hr>

            <div class="table-responsive">
                <table class="table" id="pesanan_kalibrasi">
                    <thead class="thead-dark">
                        <tr class="text-center">
                            <th>Pemesan</th>
                            <th>No Order</th>
                            <th>Nama Alat</th>
                            <th>Tanggal Masuk</th>
                            <th>Tanggal Selesai</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</div>