<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\User;

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
        'nama_pegawai',
    ];

    public function pelanggan_append(){
        return $this->belongsTo(Pelanggan::class, 'uid_pelanggan','uid');
    }
    public function pegawai_append(){
        return $this->belongsTo(User::class, 'uid_pegawai', 'id');
    }

    public function getNamaPelangganAttribute(){
        return $this->pelanggan_append->nama_perusahaan ?? "Unknown";
    }
    public function getNamaPegawaiAttribute(){
        return $this->pegawai_append->name ?? "Unknown";
    }
}
