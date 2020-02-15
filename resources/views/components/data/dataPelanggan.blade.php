@if(session('success'))
    <script>
        infosuccess('{{session('success')}}');
    </script>
@endif
<div class="col-md-12 col-lg-12">
    <div class="card">
        <div class="card-body">
            <h4>Data Pelanggan</h4>
            <span class="fs12">Menampilkan Semua Data Pemesanan</span> <hr>

            <div class="table-responsive">
                <table class="table" id="data_pelanggan">
                    <thead class="thead-dark">
                        <tr class="text-center">
                            <th>Nama Perusahaan</th>
                            <th>Nomor Telepon</th>
                            <th>Email</th>
                            <th>Tanggal Terdaftar</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</div>