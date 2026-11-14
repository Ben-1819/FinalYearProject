<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('performance_metrics', function (Blueprint $table) {
            $table->id();
            $table->foreignId("experiment_run_id");
            $table->float("average_latency_ms");
            $table->float("p95_latency_ms");
            $table->integer("total_requests");
            $table->integer("total_messages");
            $table->integer("bytes_transferred");
            $table->float("average_cpu_usage");
            $table->float("peak_memory_mb");
            $table->integer("missed_updates");
            $table->integer("duplicate_updates");
            $table->timestamp("created_at");
            $table->timestamp("updated_at");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('performance_metrics');
    }
};
