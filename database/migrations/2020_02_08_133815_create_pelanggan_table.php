<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePelangganTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('pelanggan')){
            Schema::create('pelanggan', function (Blueprint $table) {
                $table->bigIncrements('id');
                if(config('database.default') == 'pgsql')
                        $table->uuid('uid')->default(DB::raw('gen_uuid()'));
                else if(config('database.default') == 'mysql')
                    $table->uuid('uid')->default(DB::raw('uuid()'));
                $table->string('nama_perusahaan')->nullable();
                $table->string('jenis_perusahaan')->nullable();
                $table->string('no_tlp')->nullable();
                $table->string('email')->nullable();
                $table->string('alamat')->nullable();
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
        Schema::dropIfExists('pelanggan');
    }
}
