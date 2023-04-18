<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    use HasFactory;


    public function demands_table()
    {
        return $this->belongsTo(Demand::class, 'demand_id', 'id');
    }

    public function sending_table()
    {
        return $this->belongsTo(Sending::class, 'id', 'contract_id');
    }
}
