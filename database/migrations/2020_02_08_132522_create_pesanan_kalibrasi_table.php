<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePesananKalibrasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('pesanan_kalibrasi')){
            Schema::create('pesanan_kalibrasi', function (Blueprint $table) {
                $table->bigIncrements('id');
                if(config('database.default') == 'pgsql')
                    $table->uuid('uid')->default(DB::raw('gen_uuid()'));
                else if(config('database.default') == 'mysql')
                    $table->uuid('uid')->default(DB::raw('uuid()'));
                $table->uuid('uid_pegawai')->nullable();
                $table->uuid('uid_pelanggan')->nullable();
                $table->string('no_order')->nullable();
                $table->string('no_id')->nullable();
                $table->string('nama_alat')->nullable();
                $table->string('spesifikasi')->nullable();
                $table->string('jumlah')->nullable();
                $table->text('keterangan')->nullable();
                $table->string('tanggal_masuk')->nullable();
                $table->string('tanggal_selesai')->nullable();
                $table->integer('status')->default(1);
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pesanan_kalibrasi');
    }
}
