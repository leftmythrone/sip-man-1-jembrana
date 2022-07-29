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
        Schema::create('users', function (Blueprint $table) {
            // ID Pengguna
            $table->id();

            // Foreign ID Pengguna
            $table->foreignId('user_role_id');

            // Username Pengguna
            $table->string('username')->unique();

            // Password Pengguna
            $table->string('password');

            // Slug Pengguna
            $table->string('user_slug')->unique();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
