@if(session('success'))
    <script>
        infosuccess('{{session('success')}}');
    </script>
@endif
<div class="col-md-12">
    <div class="row mt-3">
        <div class="col-6">
            <div class="row">
                <div class="col-6">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Total Pelanggan</h4>
                            <p>Total keseluruhan Pelanggan</p>
                            <h4 class="text-dark font-weight-bold mb-2">{{count($pelanggan)}} <span class="fs10 text-success">Pelanggan Terdaftar</span></h4>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Total Pesanan</h4>
                            <p>Total keseluruhan Pesanan</p>
                            <h4 class="text-dark font-weight-bold mb-2">{{count($pesanan)}} <span class="fs10 text-info">Pesanan</span></h4>
                        </div>
                    </div>
                </div>
                <div class="col-12 mt-3">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Total Pesanan Bulan Ini</h4>
                            <p>Total Pesanan Terbuat Bulan Ini</p>
                            <h4 class="text-dark font-weight-bold mb-2">{{count($pesanan)}} <span class="fs10 text-info">Pesanan</span></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>