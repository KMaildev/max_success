<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PassportPayment extends Model
{
    use HasFactory;

    public function passport_table()
    {
        return $this->belongsTo(Passport::class, 'passport_id', 'id');
    }

    public function user_table()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
