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
        Schema::create('schedules', function (Blueprint $table) {
            // ID Jadwal
            $table->id();

            // Deskripsi Jadwal
            $table->string('schedule_description');

            // Sesi Jadwal
            $table->integer('schedule_session');

            // Durasi Jadwal
            $table->integer('schedule_duration');

            // Slug Jadwal
            $table->integer('schedule_slug');

            // Foreign ID Kategori Jadwal
            $table->foreignId('schedule_category_id');

            // Foreign ID Kategori Jadwal
            $table->foreignId('schedule_teacher_id');

            // Foreign ID Kategori Jadwal
            $table->foreignId('schedule_subject_id');
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
        Schema::dropIfExists('schedules');
    }
};
