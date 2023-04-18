<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AgentList extends Model
{
    use HasFactory;

    public function region_table()
    {
        return $this->belongsTo(Region::class, 'region_id', 'id');
    }

    public function township_table()
    {
        return $this->belongsTo(Township::class, 'township_id', 'id');
    }

    public function passport_table()
    {
        return $this->hasMany(Passport::class, 'agent_list_id', 'id');
    }
}
