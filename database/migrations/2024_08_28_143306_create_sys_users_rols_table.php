<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('sys_users_rols', function (Blueprint $table) {
            $table->id();
            $table->integer('_user');
            $table->integer('_rol');
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('_user')->references('id')->on('sys_users')->onDelete('cascade');
            $table->foreign('_rol')->references('id')->on('sys_rols')->onDelete('cascade');

            $table->primary(['_user', '_rol']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sys_users_rols');
    }
};