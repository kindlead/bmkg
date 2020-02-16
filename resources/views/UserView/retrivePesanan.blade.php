<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Data Pesanan</title>
  </head>
  <style>
      @media print {

        #no-print {
            display: none;
        }
    }
  </style>
  <body>
    <div class="container">
        <div class="row mt-4">
            <div class="col-5">
                <div class="alert alert-info">
                    No Order : <b>{{$pesanan['no_order']}}</b>
                </div>
                @if($status==true)
                <button class="btn-block btn btn-success">SELESAI</button>
                @else
                <button class="btn-block btn btn-warning">SEDANG DALAM PROSES</button>
                @endif
                <div class="row mt-2">
                    <!-- <div class="col-5 mt-3">Pegawai Input</div>
                    <div class="col-7 mt-2">: <span class="btn btn-info ml-3 float-right text-white" style="width:200px;">{{$pesanan['nama_pegawai']}}</span></div> -->
                    <div class="col-5 mt-3">Nomor Order</div>
                    <div class="col-7 mt-2">: <span class="btn btn-dark float-right ml-3 text-white" style="width:200px;">{{$pesanan['no_order']}}</span></div>
                    <div class="col-5 mt-3">Nama Perusahaan</div>
                    <div class="col-7 mt-2">: <span class="btn btn-dark float-right ml-3 text-white" style="width:200px;">{{$pesanan['nama_pelanggan']}}</span></div>
                    <div class="col-5 mt-3">Nama Alat</div>
                    <div class="col-7 mt-2">: <span class="btn btn-dark float-right ml-3 text-white" style="width:200px;">{{$pesanan['nama_alat']}}</span></div>
                    <div class="col-5 mt-3">Spesifikasi</div>
                    <div class="col-7 mt-2">: <span class="btn btn-dark float-right ml-3 text-white" style="width:200px;">{{$pesanan['spesifikasi']}}</span></div>
                    <div class="col-5 mt-3">Jumlah</div>
                    <div class="col-7 mt-2">: <span class="btn btn-dark float-right ml-3 text-white" style="width:200px;">{{$pesanan['jumlah']}} Unit</span></div>
                    <div class="col-5 mt-3">Tanggal Masuk</div>
                    <div class="col-7 mt-2">: <span class="btn btn-dark float-right ml-3 text-white" style="width:200px;">{{$pesanan['tanggal_masuk']}}</span></div>
                    <div class="col-5 mt-3">Tanggal selesai</div>
                    <div class="col-7 mt-2">: <span class="btn btn-dark float-right ml-3 text-white" style="width:200px;">{{$pesanan['tanggal_selesai']}}</span></div>
                </div>
            </div>
            <div class="col-7" id="no-print">
                <button class="btn btn-warning upper bold" onclick="window.print()">Cetak atau Save Sebagai PDF</button>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>