<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Experiment extends Model
{
    protected $fillable = [
        "id",
        "name",
        "description",
        "client_count",
        "update_interval_ms",
        "polling_interval_ms",
        "duration_seconds",
        "created_at",
        "updated_at"
    ];

    /**
     * Define the relationship between the Experiment and ExperimentRun models
     */
    public function ExperimentRun()
    {
        return $this->hasMany(ExperimentRun::class);
    }
}
