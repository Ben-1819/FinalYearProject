<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UpdateDelivery extends Model
{
    protected $fillable = [
        "id",
        "event_id",
        "experiment_run_id",
        "client_identifier",
        "received_at",
        "latency_ms",
        "created_at"
    ];

    /**
     * Define the relationship between the UpdateDelivery and Event models
     */
    public function event()
    {
        return $this->belongsTo(Event::class);
    }

    /**
     * Define the relationship between the UpdateDelivery and ExperimentRun models
     */
    public function experimentRun()
    {
        return $this->belongsTo(ExperimentRun::class);
    }
}
