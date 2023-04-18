<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicalTest extends Model
{
    use HasFactory;

    protected $fillable = [
        'medical_test_date',
        'hospital_id',
        'passport_id',
        'failed_or_pass',
        'user_id',
        'created_at',
        'updated_at',
        'agent_list_id',
        'types',
    ];

    public function passport_table()
    {
        return $this->belongsTo(Passport::class, 'passport_id', 'id');
    }

    public function hospital_table()
    {
        return $this->belongsTo(Hospital::class, 'hospital_id', 'id');
    }

    public function agent_lists_table()
    {
        return $this->belongsTo(AgentList::class, 'agent_list_id', 'id');
    }
}
