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
        Schema::create('teachers', function (Blueprint $table) {
            // ID Guru
            $table->id();

            // Nama Guru
            $table->string('teacher_name');

            // Status Guru
            $table->string('teacher_status');

            // Pendidikan Terakhir Guru
            $table->string('teacher_tertiary_education');

            // No Telfon Guru
            $table->integer('teacher_phone_number')->unique();

            // Email Guru
            $table->string('teacher_email')->unique();

            // Slug Guru
            $table->string('teacher_slug')->unique();

            // Foreign ID Guru
            $table->foreignId('teacher_classroom_id');
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
        Schema::dropIfExists('teachers');
    }
};
