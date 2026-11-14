<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TestClient extends Model
{
    protected $fillable = [
        "id",
        "experiment_run_id",
        "client_identifier",
        "connected_at",
        "disconnected_at",
        "last_activity_at",
        "messages_received",
        "created_at",
        "updated_at"
    ];

    /**
     * Define the relationship between the TestClient and the PerformanceMetric models
     */
    public function performanceMetric()
    {
        return $this->belongsTo(PerformanceMetric::class);
    }
}
