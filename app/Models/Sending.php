<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sending extends Model
{
    use HasFactory;

    public function demands_table()
    {
        return $this->belongsTo(Demand::class, 'demand_id', 'id');
    }
}