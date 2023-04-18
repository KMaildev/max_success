<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OverseasAgency extends Model
{
    use HasFactory;

    public function countries_table()
    {
        return $this->belongsTo(Country::class, 'countrie_id', 'id');
    }
}
