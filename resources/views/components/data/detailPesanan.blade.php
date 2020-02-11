@if(session('success'))
    <script>
        infosuccess('{{session('success')}}');
    </script>
@endif
<div class="col-md-12 col-lg-12">
    <div class="card">
        <a href="{{url('edit-pesanan')}}/{{$thisPesanan['uid']}}" class="position-absolute btn btn-sm btn-info text-white p-1 hover-op-5 pointer" style="right:20px; top:20px;"><i class="fas fa-edit"></i></a>
        <a href="#" onclick="confirm_me('{{url('delete-pesanan')}}/{{$thisPesanan['uid']}}','Hapus', 'Tidak bisa mengembalikan data yang dihapus !')" class="position-absolute btn btn-sm btn-danger text-white p-1 hover-op-5 pointer" style="right:50px; top:20px;"><i class="fas fa-trash"></i></a>
        <div class="card-body">
            <h4>Detail Pemesanan Perusahaan <span class="text-info">{{$thisPesanan['nama_pelanggan']}}</span></h4>
            <span class="fs12">Detail Pemesanan Alat !</span> <hr>

            <div class="row p-1">
                <div class="col-12 jumbotron p-2">
                    <h4>Data Pemesan</h4>
                    <span class="fs12">Berikut adalah informasi pemesan, anda dapat mengubahnya dihalaman Pelanggan !</span> <hr>
                    <div class="row">
                    <div class="col-2 mt-2">Nomor Pemesan</div>
                    <div class="col-9 mt-2">: <span class="text-info bold">{{$thisPesanan['nama_pelanggan']}}</span></div>
                    <div class="col-2 mt-2">Email Pemesan</div>
                    <div class="col-9 mt-2">: <span class="text-info bold">{{$thisPesanan['pelanggan_append']['email']}}</span></div>
                    <div class="col-2 mt-2">No Hp Pemesan</div>
                    <div class="col-9 mt-2">: <span class="text-info bold">{{$thisPesanan['pelanggan_append']['no_tlp']}}</span></div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-2 mt-3">Nomor Order</div>
                <div class="col-9 mt-2">: <span class="btn btn-dark ml-3 text-white" style="width:200px;">{{$thisPesanan['no_order']}}</span></div>
                <div class="col-2 mt-3">Nama Alat</div>
                <div class="col-9 mt-2">: <span class="btn btn-dark ml-3 text-white" style="width:200px;">{{$thisPesanan['nama_alat']}}</span></div>
                <div class="col-2 mt-3">Tanggal Masuk</div>
                <div class="col-9 mt-2">: <span class="btn btn-dark ml-3 text-white" style="width:200px;">{{$thisPesanan['tanggal_masuk']}}</span></div>
                <div class="col-2 mt-3">Tanggal selesai</div>
                <div class="col-9 mt-2">: <span class="btn btn-dark ml-3 text-white" style="width:200px;">{{$thisPesanan['tanggal_selesai']}}</span></div>
            </div>
        </div>
    </div>
</div>