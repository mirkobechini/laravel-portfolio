<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    public function projects()
    {
        return $this->hasOne(Project::class);
    }
}
