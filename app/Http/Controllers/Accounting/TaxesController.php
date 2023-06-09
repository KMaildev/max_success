<?php

namespace App\Http\Controllers\Accounting;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTexas;
use App\Http\Requests\UpdateTexas;
use App\Models\Taxes;
use Illuminate\Http\Request;

class TaxesController extends Controller
{
    public function index()
    {
        $taxes = Taxes::orderBy('tax_type', 'DESC')
            ->get();
        return view('accounting.taxes.index', compact('taxes'));
    }


    public function create(Request $request)
    {
        return view('accounting.taxes.create');
    }

    public function store(StoreTexas $request)
    {
        $taxes = new Taxes();
        $taxes->tax_name = $request->tax_name;
        $taxes->description = $request->description;
        $taxes->tax_computation = $request->tax_computation;
        $taxes->amount = $request->amount;
        $taxes->tax_type = $request->tax_type;
        $taxes->status = 'Active';
        $taxes->save();
        return redirect()->back();
    }


    public function edit($id)
    {
        $taxe = Taxes::findOrFail($id);
        return view('accounting.taxes.edit', compact('taxe'));
    }

    public function update(UpdateTexas $request, $id)
    {
        $taxes = Taxes::findOrFail($id);
        $taxes->tax_name = $request->tax_name;
        $taxes->description = $request->description;
        $taxes->tax_computation = $request->tax_computation;
        $taxes->amount = $request->amount;
        $taxes->tax_type = $request->tax_type;
        $taxes->update();
        return redirect()->back();
    }

    public function taxes_change_status($id)
    {
        $taxe = Taxes::findOrFail($id);
        if ($taxe->status == 'Active') {
            $taxe->status = 'Inactive';
        } else {
            $taxe->status = 'Active';
        }
        $taxe->update();
        return redirect()->back();
    }
}
