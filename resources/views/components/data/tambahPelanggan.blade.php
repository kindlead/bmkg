<div class="col-md-12 col-lg-8">
    <div class="card">
        <div class="card-body">
            <h4>Tambah Data Pelanggan</h4>
            <span class="fs12">Pastikan anda memasukan data yang benar !</span> <hr>
            <form action="{{url('tambah-pelanggan')}}" method="POST">
                <input type="hidden" name="pelanggan_page" value="0">
                @csrf
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
                <div class="col-12 mt-3">
                    <button class="btn btn-dark btn-block btn-sm">Tambah Pelanggan</button>
                </div>
            </form>
        </div>
    </div>
</div>