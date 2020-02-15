<div class="col-md-12 col-lg-8">
    <div class="card">
        <div class="card-body">
            <h4>Edit Data Pelanggan <span class="text-info">{{$thisPelanggan['nama_perusahaan']}}</span></h4>
            <span class="fs12">Pastikan anda memasukan data yang benar !</span> <hr>
            <form action="{{url('edit-pelanggan')}}/{{$thisPelanggan['uid']}}" method="POST">
                @csrf
                <div class="col-12 mt-3">
                    <label for="">Nama Perusahaaan</label>
                    <input type="text" value="{{$thisPelanggan['nama_perusahaan']}}" name="nama_perusahaan" class="form-control">
                </div>
                <div class="col-12 mt-3">
                    <label for="">Jenis Perusahaaan</label>
                    <input type="text" value="{{$thisPelanggan['jenis_perusahaan']}}" name="jenis_perusahaan" class="form-control">
                </div>
                <div class="col-12 mt-3">
                    <label for="">No Telepon</label>
                    <input type="text" value="{{$thisPelanggan['no_tlp']}}"  name="no_tlp" class="form-control">
                </div>
                <div class="col-12 mt-3">
                    <label for="">Email Perusahaan</label>
                    <input type="text" value="{{$thisPelanggan['email']}}" name="email" name="jenis_perusahaan" class="form-control">
                </div>
                <div class="col-12 mt-3">
                    <label for="">Alamat Perusahaan</label>
                    <textarea name="alamat"  id="" cols="30" rows="10" class="form-control">
                        {{$thisPelanggan['alamat']}}
                    </textarea>
                </div>
                <div class="col-12 mt-3">
                    <button class="btn btn-dark btn-block btn-sm">Edit Pelanggan</button>
                </div>
            </form>
        </div>
    </div>
</div>