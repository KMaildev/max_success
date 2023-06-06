<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CashBook extends Model
{
    use HasFactory;

    public function chart_of_account()
    {
        return $this->belongsTo(ChartofAccount::class, 'chartof_account_id', 'id');
    }

    public function bank_cash()
    {
        return $this->belongsTo(ChartofAccount::class, 'bank_cash_id', 'id');
    }

    public function demand_invoice()
    {
        return $this->belongsTo(DemandInvoice::class, 'demand_invoice_id', 'id');
    }
}
