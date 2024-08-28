<?php

use App\Enums\Privileges;
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
        Schema::create('sys_privileges', function (Blueprint $table) {
            $table->id();
            $table->integer('_module');
            $table->enum('acces', ['si', 'no']);
            $table->enum('create', ['si', 'no']);
            $table->enum('update', array_column(Privileges::cases(), 'value'));
            $table->enum('eliminate', array_column(Privileges::cases(), 'value'));
            $table->enum('list', array_column(Privileges::cases(), 'value'));
            $table->enum('view', array_column(Privileges::cases(), 'value'));
            $table->enum('export', ['todo', 'nada']);
            $table->timestamps();
            $table->tinyInteger('delete')->unsigned()->default(0);
            $table->softDeletes();
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
        Schema::dropIfExists('sys_privileges');
    }
};