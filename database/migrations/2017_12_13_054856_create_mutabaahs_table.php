<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMutabaahsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mutabaahs', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->date('tanggal');
            $table->integer('hadir');
            $table->string('jamkerja_hadir')->nullable;
            $table->string('jamkerja_pulang')->nullable;
            $table->integer('jp_jumlahjam')->nullable;
            $table->integer('jp_jumlahtatapmuka')->nullable;
            $table->integer('jp_rpp')->nullable;
            $table->integer('jp_lk')->nullable;
            $table->integer('jp_bahanajar')->nullable;
            $table->integer('jp_penilaian')->nullable;
            $table->integer('tilawah');
            $table->integer('subuh_jamaah');
            $table->integer('shalat_jamaah');
            $table->integer('almatsurat');
            $table->integer('shalat_dhuha');
            $table->integer('qiyamulail');
            $table->integer('puasa_sunnah');
            $table->integer('liqo');
            $table->integer('olahraga_ya');
            $table->string('olahraga_waktu')->nullable;
            $table->integer('upacara_ya');
            $table->string('upacara_keterangan')->nullable;
            $table->integer('mgmp');
            $table->integer('membinahalaqoh_ya');
            $table->string('membinahalaqoh_waktu')->nullable;
            $table->integer('rapat_ya');
            $table->string('rapat_jenis')->nullable;
            $table->integer('homevisit_ya');
            $table->string('homevisit_jenis')->nullable;
            $table->integer('mengisiacara_ya');
            $table->string('mengisiacara_jenis')->nullable;
            $table->integer('pelatihan_ya');
            $table->string('pelatihan_jenis')->nullable;
            $table->integer('supervisi');
            $table->integer('kultum_di_sekolah');
            $table->integer('isi_website');
            $table->integer('bagikan_medsos');
            $table->integer('karya_ya');
            $table->string('karya_jenis')->nullable;
            $table->integer('lomba_ya');
            $table->string('lomba_jenis')->nullable;
            $table->integer('rencanapembelajaranberikutnya_ya');
            $table->string('rencanapembelajaranberikutnya_jenis')->nullable;
            $table->integer('rencanapembelajaranberikutnya_validasi')->nullable;

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mutabaahs');
    }
}
