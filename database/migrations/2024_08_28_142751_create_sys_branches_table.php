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
            $table->string('logo');
            $table->string('api_local');
            $table->string('api_server');
            $table->string('api_certificades');
            $table->string('api_complaints_suggestions');
            $table->timestamps();
            $table->tinyInteger('delete')->unsigned()->default(0);
            $table->integer('_created_by');
            $table->integer('_modified_by')->nullable();
            $table->softDeletes();

            $table->foreign('_account')->references('id')->on('sys_accounts')->onDelete('cascade');

            $table->foreign('_created_by')->references('id')->on('sys_users')->onDelete('cascade');
            $table->foreign('_modified_by')->references('id')->on('sys_users')->onDelete('cascade');
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