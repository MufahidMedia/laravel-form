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
        Schema::create('consultation_models', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('phone');
            $table->string('jurusan');
            $table->string('jenjang');
            $table->string('universitas');
            $table->string('email');
            $table->string('angkatan');
            $table->string('judul_penelitian');
            $table->enum('info', array('IG', 'FB', 'WA', 'WEBSITE', 'EMAIL', 'TEMAN', 'SAUDARA', 'KIOS'));
            $table->text('kds');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('consultation_models');
    }
};
