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
        Schema::create('sys_accounts', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('logo');
            $table->tinyInteger('delete')->unsigned()->default(0);
            $table->softDeletes();
            $table->timestamps();
            $table->integer('_created_by');
            $table->integer('_modified_by')->nullable();

            $table->foreign('_created_by')->references('id')->on('sys_users')->onDelete('cascade');
            $table->foreign('_modified_by')->references('id')->on('sys_users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sys_accounts');
    }
};
