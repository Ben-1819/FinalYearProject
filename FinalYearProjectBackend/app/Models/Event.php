<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        "id",
        "experiment_run_id",
        "event_type",
        "payload",
        "created_at",
        "updated_at"
    ];

    /**
     * Define the relationship between the Event and UpdateDelivery models
     */
    public function updateDelivery()
    {
        return $this->hasMany(UpdateDelivery::class);
    }

    /**
     * Define the relationship between the Event and ExperimentRun models
     */
    public function experimentRun()
    {
        return $this->belongsTo(ExperimentRun::class);
    }
}
