<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DemandInvoice extends Model
{
    use HasFactory;

    public function demand()
    {
        return $this->belongsTo(Demand::class, 'demand_id', 'id');
    }

    public function overseas_agencies()
    {
        return $this->belongsTo(OverseasAgency::class, 'overseas_agencie_id', 'id');
    }

    public function cash_books()
    {
        return $this->hasMany(CashBook::class, 'demand_invoice_id', 'id');
    }
}
