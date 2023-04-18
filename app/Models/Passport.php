<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Passport extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'father_name',
        'nrc',
        'date_of_birth',
        'passport',
        'passport_date',
        'local_agent_name',
        'phone',
        'address',
        'gender',
        'remark',
        'created_at',
        'updated_at',
        'join_date',
        'owic',
        'owic_date',
        'reject_status',
        'reject_date',
        'reject_reason',
        'place_of_passport',
        'agent_list_id',
        'mother_name',
        'go_date',
        'go_reason',
        'entry_date',
        'nation_religion',
        'region_state',

        'labour_code',
        'age',
        'photo',
        'nrc_front',
        'nrc_back',
        'passport_expiry_date',
        'qualification',
        'weight',
        'height',
        'tatto',
        'smoking',
        'alcohol',
        'prominent_sign',
        'working_experience',
        'selected_country',
        'labour_card_no',
        'issue_of_labour_date',

        'identification_card',
        'issue_date_of_id_card',
        'son',
        'son_age',
        'daughter',
        'daughter_age',
        'address_line_one',
        'phone_family',
        'name_of_heir',
        'relative',
        'nrc_of_heir',
        'passport_cost',
        'car_charges',
        'passport_register_status',
        'user_id',
        'marital_status',
        'leader',

    ];

    public function agent_list_table()
    {
        return $this->belongsTo(AgentList::class, 'agent_list_id', 'id');
    }

    public function labour_management_table()
    {
        return $this->belongsTo(LabourManagement::class, 'passport', 'passport');
    }

    public function labour_management()
    {
        return $this->belongsTo(LabourManagement::class, 'passport', 'passport');
    }

    public function passport_payments_table()
    {
        return $this->hasMany(PassportPayment::class, 'passport_id', 'id');
    }

    public function medical_tests_table()
    {
        return $this->belongsTo(MedicalTest::class, 'passport_id', 'id')->latest();
    }

    public function medical_tests_status()
    {
        return $this->belongsTo(MedicalTest::class, 'id', 'passport_id')->latest();
    }

    public function interview_labours_status()
    {
        return $this->belongsTo(InterviewLabour::class, 'id', 'passport_id')->latest();
    }
}
