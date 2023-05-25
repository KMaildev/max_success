<?php

namespace App\Http\Controllers\Accounting;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreChartofAccount;
use App\Http\Requests\UpdateChartofAccount;
use App\Models\AccountType;
use App\Models\ChartofAccount;
use Illuminate\Http\Request;

class ChartofAccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $chartof_accounts = ChartofAccount::all();
        return view('accounting.chartof_account.index', compact('chartof_accounts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $account_types = AccountType::all();
        return view('accounting.chartof_account.create', compact('account_types'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreChartofAccount $request)
    {
        $coa = new ChartofAccount();
        $coa->account_type_id = $request->account_type;
        $account_type = AccountType::findOrFail($request->account_type);
        $coa->account_classification_id = $account_type->account_classification_id;

        $coa->coa_number = $request->account_number;
        $coa->description = $request->description;
      
        $coa->save();
        return redirect()->route('chartofaccount.create')
            ->with('success', 'Created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $coa = ChartofAccount::findOrFail($id);
        $account_types = AccountType::all();
        return view('accounting.chartof_account.edit', compact('coa', 'account_types'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateChartofAccount $request, $id)
    {
        $coa = ChartofAccount::findOrFail($id);
        $coa->account_type_id = $request->account_type;
        $account_type = AccountType::findOrFail($request->account_type);
        $coa->account_classification_id = $account_type->account_classification_id;

        $coa->coa_number = $request->account_number;
        $coa->description = $request->description;
        $coa->update();
        return redirect()->back()->with('success', 'Updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Coa = ChartofAccount::findOrFail($id);
        $Coa->delete();
        return redirect()->back()->with('success', 'Deleted successfully.');
    }


    public function dependentAjax($id)
    {
        $chartof_account = ChartofAccount::findOrFail($id);
        return json_encode($chartof_account);
    }
}
