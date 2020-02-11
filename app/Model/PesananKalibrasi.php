<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class PesananKalibrasi extends Model
{
    protected $table = "pesanan_kalibrasi";
    protected $primaryKey = "uid";
    public $incrementing = false;
    protected $fillable = [
        'uid',
        'uid_pegawai',
        'uid_pelanggan',
        'no_order',
        'no_id',
        'nama_alat',
        'spesifikasi',
        'jumlah',
        'keterangan',
        'tanggal_masuk',
        'tanggal_selesai',
    ];

    protected $append = [
        'nama_pelanggan',
    ];

    public function pelanggan_append(){
        return $this->belongsTo(Pelanggan::class, 'uid_pelanggan','uid');
    }

    public function getNamaPelangganAttribute(){
        return $this->pelanggan_append->nama_perusahaan ?? "Unknown";
    }
}
