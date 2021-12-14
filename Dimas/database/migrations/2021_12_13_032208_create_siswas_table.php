<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswa', function (Blueprint $table) {
            $table->id();
            $table->text(`nisn`);
            $table->text(`nis`);
            $table->text(`nama`);
            $table->text(`id_kelas`);
            $table->text(`alamat`);
            $table->text(`id_telp`);
            $table->text(`id_login`);
            $table->text(`id_spp`);
            $table->text(`image`);
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('siswas');
    }
}
