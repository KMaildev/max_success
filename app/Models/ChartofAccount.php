<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChartofAccount extends Model
{
    use HasFactory;

    public function account_type_table()
    {
        return $this->belongsTo(AccountType::class, 'account_type_id', 'id');
    }

    public function account_classifications_table()
    {
        return $this->belongsTo(AccountClassification::class, 'account_classification_id', 'id');
    }

    public function cash_books_table()
    {
        return $this->hasMany(CashBook::class, 'chartof_account_id', 'id');
    }

    public function chartof_account_table()
    {
        return $this->belongsTo(ChartofAccount::class, 'chartof_account_id', 'id');
    }


    public function bank_cash_report()
    {
        return $this->hasMany(CashBook::class, 'bank_cash_id', 'id');
    }
}
