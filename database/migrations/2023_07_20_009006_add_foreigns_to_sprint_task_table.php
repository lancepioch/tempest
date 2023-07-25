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
        Schema::table('sprint_task', function (Blueprint $table) {
            $table
                ->foreign('task_id')
                ->references('id')
                ->on('tasks')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');

            $table
                ->foreign('sprint_id')
                ->references('id')
                ->on('sprints')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('sprint_task', function (Blueprint $table) {
            $table->dropForeign(['task_id']);
            $table->dropForeign(['sprint_id']);
        });
    }
};
