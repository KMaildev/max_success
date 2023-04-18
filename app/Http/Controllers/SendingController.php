<?php

namespace App\Http\Controllers;

use App\Exports\SendingExport;
use App\Http\Requests\StoreSending;
use App\Http\Requests\UpdateSending;
use App\Models\Contract;
use App\Models\Demand;
use App\Models\LabourManagement;
use App\Models\Office;
use App\Models\OverseasAgency;
use App\Models\Sending;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class SendingController extends Controller
{

    public function index()
    {
        $offices = Office::all();
        $overseas_agencies = OverseasAgency::all();

        $sendings = Sending::paginate(100);
        if (request('office_id')) {
            $office_id = request('office_id');
            $sendings = Sending::whereHas('demands_table', function ($q) use ($office_id) {
                $q->where('company_name', $office_id);
            })->paginate(100);
        }


        if (request('overseas_agencie_id')) {
            $overseas_agencie_id = request('overseas_agencie_id');
            $sendings = Sending::whereHas('demands_table', function ($q) use ($overseas_agencie_id) {
                $q->where('overseas_agencie_id', $overseas_agencie_id);
            })->paginate(100);
        }

        if (request('from_date') && request('to_date')) {
            $from_date = request('from_date');
            $to_date = request('to_date');
            $sendings = Sending::whereBetween('sending_date', [$from_date, $to_date])
                ->paginate(100);
        }

        return view('sending.index', compact('sendings', 'offices', 'overseas_agencies'));
    }



    public function create($id)
    {
        $contract = Contract::findOrFail($id);
        $demands = Demand::all();
        return view('sending.create', compact('contract', 'demands'));
    }

    public function store(StoreSending $request)
    {
        $sending = new Sending();
        $sending->sending_date = $request->sending_date;
        $sending->sending_male = $request->sending_male ?? 0;
        $sending->sending_female = $request->sending_female ?? 0;
        $sending->remark = $request->remark;
        $sending->demand_id = $request->demand_id;
        $sending->contract_id = $request->contract_id;
        $sending->save();

        $sending_id = $sending->id;
        $contract_id = $request->contract_id;
        LabourManagement::where('contract_id', $contract_id)
            ->update([
                'sending_id' => $sending_id
            ]);
        return redirect()->back()->with('success', 'Process is completed.');
    }


    public function edit($id)
    {
        $sending = Sending::findOrFail($id);
        $contract_id = $sending->contract_id;
        $contract = Contract::findOrFail($contract_id);
        $demands = Demand::all();
        return view('sending.edit', compact('contract', 'demands', 'sending'));
    }


    public function update(UpdateSending $request, $id)
    {
        $sending = Sending::findOrFail($id);
        $sending->sending_date = $request->sending_date;
        $sending->sending_male = $request->sending_male ?? 0;
        $sending->sending_female = $request->sending_female ?? 0;
        $sending->remark = $request->remark;
        $sending->demand_id = $request->demand_id;
        $sending->contract_id = $request->contract_id;
        $sending->save();


        $sending_id = $sending->id;
        $contract_id = $request->contract_id;
        LabourManagement::where('contract_id', $contract_id)
            ->update([
                'sending_id' => $sending_id
            ]);
        return redirect()->back()->with('success', 'Process is completed.');
    }


    public function destroy($id)
    {

        LabourManagement::where('sending_id', $id)
            ->update([
                'sending_id' => null,
            ]);

        $contract = Sending::findOrFail($id);
        $contract->delete();
        return redirect()->back()->with('success', 'Deleted successfully.');
    }

    public function sendingExportExcel(Request $request)
    {
        return Excel::download(new SendingExport(), 'excel_' . date("Y-m-d H:i:s") . '.xlsx');
    }
}
