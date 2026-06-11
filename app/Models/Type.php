<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use League\Uri\FeatureDetection;

class Type extends Model
{
    public function projects() {
        return $this->hasMany(Project::class);
    }
}
