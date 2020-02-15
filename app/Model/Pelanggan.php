<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    protected $table = "pelanggan";
    protected $primaryKey = "uid";
    public $incrementing = false;
    protected $fillable = [
        'nama_perusahaan',
        'jenis_perusahaan',
        'no_tlp',
        'email',
        'alamat',        
    ];
    protected $appends = [
        'pesanan',
    ];

    // Make Relation
    public function pesanan_append(){
        return $this->hasMany(PesananKalibrasi::class, 'uid_pelanggan', 'uid');
    }

    // Fill Append
    public function getPesananAttribute(){
        $pesanan = $this->pesanan_append()->get();
        return $pesanan;
    }
}
