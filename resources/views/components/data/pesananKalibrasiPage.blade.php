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
                <table class="table">
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
                    <tbody>
                        @foreach($pesanan as $row)
                            <tr>
                                <td>{{$row['nama_pelanggan']}}</td>
                                <td>{{$row['no_order']}}</td>
                                <td>{{$row['nama_alat']}}</td>
                                <td>{{$row['tanggal_masuk']}}</td>
                                <td>{{$row['tanggal_selesai']}}</td>
                                <td class="text-center">
                                    <a href="{{url('detail-pemesanan')}}/{{$row['id']}}" class="btn btn-success btn-sm p-1"><i class="fas fa-eye"></i></a>
                                    <a href="" class="btn btn-info btn-sm p-1"><i class="fas fa-edit"></i></a>
                                    <a href="{{url('delete-pesanan')}}/{{$row['id']}}" class="btn btn-danger btn-sm p-1"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>