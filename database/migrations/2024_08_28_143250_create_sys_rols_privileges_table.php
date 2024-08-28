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
        Schema::create('sys_rols_privileges', function (Blueprint $table) {
            $table->id();
            $table->integer('_rol');
            $table->integer('_privilege');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('_rol')->references('id')->on('sys_rols')->onDelete('cascade');
            $table->foreign('_privilege')->references('id')->on('sys_privileges')->onDelete('cascade');

            $table->primary(['_rol', '_privilege']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sys_rols_privileges');
    }
};