<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ExperimentRun extends Model
{
    protected $fillable = [
        "id",
        "experiment_id",
        "communication_method",
        "status",
        "started_at",
        "completed_at",
        "created_at",
        "updated_at"
    ];

    /**
     * Define the relationship between the ExperimentRun and Experiment models
     */
    public function Experiment()
    {
        return $this->belongsTo(Experiment::class);
    }

    /**
     * Define the relationship between the ExperimentRun and the Event models
     */
    public function event()
    {
        return $this->hasMany(Event::class);
    }

    /**
     * Define the relationship between the ExperimentRun and the PerformanceMetric models
     */
    public function performanceMetric()
    {
        return $this->hasMany(PerformanceMetric::class);
    }

    /**
     * Define the relationship between the ExperimentRun and the UpdateDelivery models
     */
    public function updateDelivery()
    {
        return $this->hasMany(UpdateDelivery::class);
    }
}
