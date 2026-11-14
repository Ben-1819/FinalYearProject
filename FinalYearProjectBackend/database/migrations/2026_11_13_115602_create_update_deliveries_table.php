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
        Schema::create('update_deliveries', function (Blueprint $table) {
            $table->id();
            $table->foreignId("event_id");
            $table->foreignId("experiment_run_id");
            $table->string("client_identifier");
            $table->timestamp("received_at", 6);
            $table->decimal("latency_ms", 12, 3);
            $table->timestamp("created_at");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('update_deliveries');
    }
};
