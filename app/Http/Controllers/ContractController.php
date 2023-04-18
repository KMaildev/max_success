<?php

namespace App\Http\Controllers;

use App\Exports\ContractExport;
use App\Http\Requests\StoreContracts;
use App\Http\Requests\UpdateContracts;
use App\Models\Contract;
use App\Models\Demand;
use App\Models\LabourManagement;
use App\Models\Office;
use App\Models\OverseasAgency;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ContractController extends Controller
{
    public function index()
    {
        $offices = Office::all();
        $overseas_agencies = OverseasAgency::all();

        $contracts = Contract::paginate(100);
        if (request('office_id')) {
            $office_id = request('office_id');
            $contracts = Contract::whereHas('demands_table', function ($q) use ($office_id) {
                $q->where('company_name', $office_id);
            })->paginate(100);
        }

        if (request('overseas_agencie_id')) {
            $overseas_agencie_id = request('overseas_agencie_id');
            $contracts = Contract::whereHas('demands_table', function ($q) use ($overseas_agencie_id) {
                $q->where('overseas_agencie_id', $overseas_agencie_id);
            })->paginate(100);
        }

        if (request('from_date') && request('to_date')) {
            $from_date = request('from_date');
            $to_date = request('to_date');
            $contracts = Contract::whereBetween('contract_date', [$from_date, $to_date])
                ->paginate(100);
        }

        return view('contract.index', compact('contracts', 'offices', 'overseas_agencies'));
    }

    public function create()
    {
        $demands = Demand::all();
        return view('contract.create', compact('demands'));
    }

    public function store(StoreContracts $request)
    {
        $contract = new Contract();
        $contract->contract_date = $request->contract_date;
        $contract->contract_male = $request->contract_male ?? 0;
        $contract->contract_female = $request->contract_female ?? 0;
        $contract->remark = $request->remark;
        $contract->demand_id = $request->demand_id;
        $contract->save();
        return redirect()->back()->with('success', 'Process is completed.');
    }

    public function edit($id)
    {
        $contract = Contract::findOrFail($id);
        $demands = Demand::all();
        return view('contract.edit', compact('contract', 'demands'));
    }

    public function update(UpdateContracts $request, $id)
    {
        $contract = Contract::findOrFail($id);
        $contract->contract_date = $request->contract_date;
        $contract->contract_male = $request->contract_male ?? 0;
        $contract->contract_female = $request->contract_female ?? 0;
        $contract->remark = $request->remark;
        $contract->demand_id = $request->demand_id;
        $contract->update();
        return redirect()->back()->with('success', 'Process is completed.');
    }

    public function destroy($id)
    {

        LabourManagement::where('contract_id', $id)
            ->delete();

        $contract = Contract::findOrFail($id);
        $contract->delete();
        return redirect()->back()->with('success', 'Deleted successfully.');
    }

    public function contractExportExcel(Request $request)
    {
        return Excel::download(new ContractExport(), 'excel_' . date("Y-m-d H:i:s") . '.xlsx');
    }
}
