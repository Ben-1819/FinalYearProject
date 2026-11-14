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
        Schema::create('test_clients', function (Blueprint $table) {
            $table->id();
            $table->foreignId("experiment_run_id");
            $table->string("client_identifier");
            $table->string("communication_method");
            $table->string("status");
            $table->timestamp("connected_at", 6)->nullable();
            $table->timestamp("disconnected_at", 6)->nullable();
            $table->timestamp("last_activity_at", 6)->nullable();
            $table->integer("messages_received")->default(0);
            $table->timestamp("created_at");
            $table->timestamp("updated_at");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('test_clients');
    }
};
