<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Taxes extends Model
{
    use HasFactory;


    public function cashbook()
    {
        return $this->hasMany(CashBook::class, 'taxe_id', 'id');
    }
}
