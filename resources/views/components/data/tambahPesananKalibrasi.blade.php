@if(session('success'))
    <script>
        infosuccess('{{session('success')}}');
    </script>
@endif
@if(session('failed'))
    <script>
        infoerror('{{session('failed')}}');
    </script>
@endif
<div class="col-md-12 col-lg-8">
    <div class="card">
        <button class="btn btn-info btn-sm position-absolute top-0" data-toggle="modal" data-target="#exampleModal" style="right:20px; top:20px;"> <i class="fas fa-plus"></i> <span class="ml-2">Tambah Pelanggan</span></button>
        <div class="card-body">
            <h4>Tambah Data Pesanan</h4>
            <span class="fs12">Tambah Data Pemesanan Kalibrasi !</span> <hr>

            <form action="{{url('tambah-pesanan')}}" method="POST">@csrf
            <input type="hidden" name="uid_pegawai" value="{{Auth::user()->id}}">
            <div class="row">
                <div class="col-12 mt-3">
                    <label for="">No Order</label>
                    <input type="text" class="form-control" name="no_order" placeholder="Nomor Order">
                </div>
                <div class="col-6 mt-3">
                    <label for="">No. ID</label>
                    <input type="text" class="form-control" name="no_id" placeholder="Nomor ID Pemesanan">
                </div>
                <div class="col-6 mt-3">
                    <label for="">Nama Alat</label>
                    <input type="text" class="form-control" name="nama_alat" placeholder="Nama Alat">
                </div>
                <div class="col-12 mt-3">
                    <label for="">Pelanggan</label>
                    <select name="uid_pelanggan" id="" class="form-control">
                        <option value="" hidden>Pilih Pelangan</option>
                        @foreach ($pelanggan as $item)
                            <option value="{{$item['uid']}}">{{$item['nama_perusahaan']}}</option>    
                        @endforeach
                    </select>
                </div>
                <div class="col-6 mt-3">
                    <label for="">Spesifikasi</label>
                    <input type="text" name="spesifikasi" class="form-control" placeholder="Spesifikasi">
                </div>
                <div class="col-2 mt-3">
                    <label for="">Jumlah</label>
                    <input type="text" name="jumlah" class="form-control" placeholder="Jumlah">
                </div>
                <div class="col-2 mt-3">
                    <label for="">Tgl Masuk</label>
                    <input type="text" autocomplete="off" name="tanggal_masuk" class="form-control" placeholder="MM/DD/YY" id="date">
                </div>
                <div class="col-2 mt-3">
                    <label for="">Tgl Keluar</label>
                    <input type="text" autocomplete="off" name="tanggal_selesai" class="form-control" placeholder="MM/DD/YY" id="date">
                </div>
                <div class="col-12 mt-3">
                    <label for="">Keterangan</label>
                    <textarea type="text" name="keterangan" class="form-control"> </textarea>
                </div>
                <div class="col-12 mt-3">
                    <button type="submit" class="btn btn-block btn-dark">Proses</button>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>
<div class="col-md-12 col-lg-4">
    <div class="card">
        <div class="card-body">
            <h4>Pesanan Terbuat</h4>
            <span class="fs12">Pesanan terbuat pada bulan ini !</span> <hr>
            <span class="display-4">
                <span class="text-info bold">{{count($pesanan)}}</span> <span class="fs14">Pesanan Terbuat</span>
            </span> <br>
            <span class="display-4">
                <span class="text-success bold">{{count($pelanggan)}}</span> <span class="fs14">Cutomer terafiliasi</span>
            </span>
        </div>
    </div>
</div>


  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="{{url('tambah-pelanggan')}}" method="POST">
            <input type="hidden" name="pelanggan_page" value="0">
              @csrf
              <div class="row">
                  <div class="col-12 mt-3">
                      <label for="">Nama Perusahaaan</label>
                      <input type="text" name="nama_perusahaan" class="form-control">
                  </div>
                  <div class="col-12 mt-3">
                      <label for="">Jenis Perusahaaan</label>
                      <input type="text" name="jenis_perusahaan" class="form-control">
                  </div>
                  <div class="col-12 mt-3">
                      <label for="">No Telepon</label>
                      <input type="text"  name="no_tlp" class="form-control">
                  </div>
                  <div class="col-12 mt-3">
                      <label for="">Email Perusahaan</label>
                      <input type="text" name="email" name="jenis_perusahaan" class="form-control">
                  </div>
                  <div class="col-12 mt-3">
                      <label for="">Alamat Perusahaan</label>
                     <textarea name="alamat" id="" cols="30" rows="10" class="form-control"></textarea>
                  </div>
              </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-dark">Save</button>
        </div>
        </form>
      </div>
    </div>
  </div>