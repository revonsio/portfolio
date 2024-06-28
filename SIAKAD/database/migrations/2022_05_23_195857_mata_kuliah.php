<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(('mata_kuliah'), function (Blueprint $table) {
            $table->id();
            $table->string('kodeMataKuliah');
            $table->string('namaMataKuliah');
            $table->integer('sks');
            $table->integer('tahunKurikulum');
            $table->integer('semester');
            $table->char('kodeKelas', 6);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mata_kuliah');
    }
};
