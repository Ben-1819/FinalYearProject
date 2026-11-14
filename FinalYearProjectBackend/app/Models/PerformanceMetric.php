<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PerformanceMetric extends Model
{
    protected $fillable = [
        "id",
        "experiment_run_id",
        "average_latency_ms",
        "p95_latency_ms",
        "total_requests",
        "total_messages",
        "bytes_transferred",
        "average_cpu_usage",
        "peak_memory_mb",
        "missed_updates",
        "duplicate_updates",
        "created_at",
        "updated_at"
    ];

    /**
     * Define the relationship between the PerformanceMetric and the TestClient models
     */
    public function testClient()
    {
        return $this->hasMany(TestClient::class);
    }
}
