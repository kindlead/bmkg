@if(session('success'))
    <script>
        infosuccess('{{session('success')}}');
    </script>
@endif
<div class="col-md-12 col-lg-8">
    <div class="card">
        {{-- <button class="btn btn-info btn-sm position-absolute top-0" data-toggle="modal" data-target="#exampleModal" style="right:20px; top:20px;"> <i class="fas fa-plus"></i> <span class="ml-2">Tambah Pelanggan</span></button> --}}
        <div class="card-body">
            <h4>Tambah Data Pesanan</h4>
            <span class="fs12">Tambah Data Pemesanan Kalibrasi !</span> <hr>

            <form action="{{url('edit-pesanan')}}/{{$thisPesanan['uid']}}" method="POST">@csrf
            <input type="hidden" name="uid_pegawai" value="{{Auth::user()->id}}">
            <div class="row">
                <div class="col-12 mt-3">
                    <label for="">No Order</label>
                    <input type="text" class="form-control" name="no_order" value="{{$thisPesanan['no_order']}}" placeholder="Nomor Order">
                </div>
                <div class="col-6 mt-3">
                    <label for="">No. ID</label>
                    <input type="text" class="form-control"  value="{{$thisPesanan['no_id']}}" name="no_id" placeholder="Nomor ID Pemesanan">
                </div>
                <div class="col-6 mt-3">
                    <label for="">Nama Alat</label>
                    <input type="text" class="form-control"  value="{{$thisPesanan['nama_alat']}}" name="nama_alat" placeholder="Nama Alat">
                </div>
                <div class="col-12 mt-3">
                    <label for="">Pelanggan</label>
                    <select name="uid_pelanggan" id="" class="form-control">
                        <option value="" hidden>Pilih Pelangan</option>
                        @foreach ($pelanggan as $item)
                            <option @if($thisPesanan['uid_pelanggan']==$item['uid']) selected @endif value="{{$item['uid']}}">{{$item['nama_perusahaan']}}</option>    
                        @endforeach
                    </select>
                </div>
                <div class="col-6 mt-3">
                    <label for="">Spesifikasi</label>
                    <input type="text" name="spesifikasi"  value="{{$thisPesanan['spesifikasi']}}" class="form-control" placeholder="Spesifikasi">
                </div>
                <div class="col-2 mt-3">
                    <label for="">Jumlah</label>
                    <input type="text" name="jumlah"  value="{{$thisPesanan['jumlah']}}" class="form-control" placeholder="Jumlah">
                </div>
                <div class="col-2 mt-3">
                    <label for="">Tgl Masuk</label>
                    <input type="text" name="tanggal_masuk"  value="{{$thisPesanan['tanggal_masuk']}}" class="form-control" placeholder="MM/DD/YY" id="date">
                </div>
                <div class="col-2 mt-3">
                    <label for="">Tgl Keluar</label>
                    <input type="text" name="tanggal_selesai"  value="{{$thisPesanan['tanggal_selesai']}}" class="form-control" placeholder="MM/DD/YY" id="date">
                </div>
                <div class="col-12 mt-3">
                    <button type="submit" class="btn btn-block btn-dark">Edit Pemesanan</button>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>