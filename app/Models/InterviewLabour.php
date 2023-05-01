<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InterviewLabour extends Model
{
    use HasFactory;

    protected $fillable = [
        'demand_id',
        'interview_id',
        'passport_id',
        'agent_list_id',
        'user_id',
        'created_at',
        'updated_at',
        'passport',
        'overseas_agencie_id',
    ];

    public function passport_table()
    {
        return $this->belongsTo(Passport::class, 'passport_id', 'id');
    }

    public function labour_management_table()
    {
        return $this->belongsTo(LabourManagement::class, 'passport_id', 'passport_id');
    }

    public function interviews_table()
    {
        return $this->belongsTo(Interview::class, 'interview_id', 'id');
    }
}
