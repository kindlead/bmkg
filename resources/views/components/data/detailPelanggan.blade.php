@if(session('success'))
    <script>
        infosuccess('{{session('success')}}');
    </script>
@endif
<div class="col-md-12 col-lg-12">
    <div class="card">
        <a href="{{url('edit-pelanggan')}}/{{$thisPelanggan['uid']}}" class="position-absolute btn btn-sm btn-info text-white p-1 hover-op-5 pointer" style="right:20px; top:20px;"><i class="fas fa-edit"></i></a>
        <a href="#" onclick="confirm_me('{{url('delete-pesanan')}}/{{$thisPelanggan['uid']}}','Hapus', 'Tidak bisa mengembalikan data yang dihapus !')" class="position-absolute btn btn-sm btn-danger text-white p-1 hover-op-5 pointer" style="right:50px; top:20px;"><i class="fas fa-trash"></i></a>
        <div class="card-body">
            <h4>Detail Pelanggan <span class="text-info">{{$thisPelanggan['nama_perusahaan']}}</span></h4>
            <span class="fs12">Detail Pelanggan Terdaftar dalam Database !</span> <hr>

            <div class="col-12 p-0 mt-1">
                <span class="bold">Alamat Pelanggan</span> <br>
                <span class="fs12">{{$thisPelanggan['alamat']}}</span>
            </div>

            <div class="col-12 mt-3 p-0">
                <span class="bold fs20 upper">Pesanan Pelanggan</span> <br>
                <span class="fs12">Pesanan terdaftar untuk pelanggan <span class="bold">{{$thisPelanggan['nama_perusahaan']}}</span></span> <hr>

                @if(count($thisPelanggan['pesanan'])==0)
                        <div class="alert alert-danger">
                            <i class="fas fa-warning"></i>
                            <span class="ml-2">Pelanggan ini belum memiliki pesanan !</span>
                        </div>
                @endif
            </div>
        </div>

        
    </div>
</div>