<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicalTestTempList extends Model
{
    use HasFactory;
    protected $fillable = [
        'agent_name',
        'name',
        'passport',
        'nrc',
        'passport_id',
        'session_id',
        'user_id',
        'agent_list_id',
        'types',
    ];
}
