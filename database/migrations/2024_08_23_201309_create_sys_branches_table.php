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
        Schema::create('sys_branches', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('_account');
            $table->string('name');
            $table->text('city');
            $table->text('direction');
            $table->text('contact_people');
            $table->string('phone');
            $table->string('email');
            $table->string('logo')->nullable();
            $table->string('api_local')->nullable();
            $table->string('api_server')->nullable();
            $table->string('api_certificades')->nullable();
            $table->string('api_complaints_suggestions')->nullable();
            $table->timestamps();
            $table->boolean('delete')->default(false);
            $table->softDeletes();

            $table->foreign('_account')->references('id')->on('sys_accounts');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sys_branches');
    }
};
