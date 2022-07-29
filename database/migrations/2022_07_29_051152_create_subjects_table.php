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
        Schema::create('subjects', function (Blueprint $table) {
            // ID Mata Kuliah
            $table->id();

            // Nama Mata Kuliah
            $table->string('subject_name');

            // Durasi Mata Kuliah
            $table->integer('subject_duration');

            // Bobot Mata Kuliah
            $table->string('subject_criteria');

            // Slug Mata Kuliah
            $table->string('subject_slug');

            // Foreign ID Jurusan
            $table->foreignId('subject_department_id');
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
        Schema::dropIfExists('subjects');
    }
};
