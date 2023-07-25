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
        Schema::table('board_task', function (Blueprint $table) {
            $table
                ->foreign('task_id')
                ->references('id')
                ->on('tasks')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');

            $table
                ->foreign('board_id')
                ->references('id')
                ->on('boards')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('board_task', function (Blueprint $table) {
            $table->dropForeign(['task_id']);
            $table->dropForeign(['board_id']);
        });
    }
};
