<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use function Laravel\Prompts\table;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('sys_users', function (Blueprint $table) {
            $table->foreign('_branch')->references('id')->on('sys_branches')->onDelete('cascade');

            $table->foreign('_created_by')->references('id')->on('sys_users')->onDelete('cascade');
            $table->foreign('_modified_by')->references('id')->on('sys_users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('sys_users', function (Blueprint $table) {
            $table->dropForeign(['_branch']);

            $table->dropForeign(['_created_by']);
            $table->dropForeign(['_modified_by']);
        });
    }
};
