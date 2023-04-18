<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HospitalFile extends Model
{
    use HasFactory;

    public function users_table()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function hospital_table()
    {
        return $this->belongsTo(Hospital::class, 'hospital_id', 'id');
    }
}
