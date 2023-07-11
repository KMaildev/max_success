<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'attendance_date',
        'on_duty',
        'off_duty',
        'clock_in',
        'clock_out',
        'late',
        'early',
        'absent',
        'ot_time',
        'created_at',
        'updated_at',
    ];
}
