<?php

namespace App\Http\Controllers;

use App\Exports\ExportPassport;
use App\Http\Requests\StoreLabourManagement;
use App\Imports\ImportLabourManagement;
use App\Models\Contract;
use App\Models\InterviewLabour;
use App\Models\LabourManagement;
use App\Models\Passport;
use App\Models\Sending;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class LabourManagementController extends Controller
{
    public function createAndView($id)
    {
        $contract = Contract::findOrFail($id);
        $demand_id = $contract->demand_id;

        $interview_labours = InterviewLabour::where('demand_id', $demand_id)
            ->get();

        return view('labour_management.create_View', compact('contract', 'interview_labours'));
    }


    public function submitToContract(Request $request)
    {

        $this->validate($request, [
            'contract_id' => 'required',
        ]);

        $data = $request->except('_token');

        // Contract 
        $contract_id = $request->contract_id;
        $contract = Contract::findOrFail($contract_id);
        $demand_id = $contract->demand_id;
        $overseas_agencies_id = $contract->demands_table->overseas_agencie_id;

        $passportId = $data['passport_id'];

        foreach ($passportId as $key => $value) {
            $passportData = Passport::findOrFail($value);

            LabourManagement::updateOrCreate(
                [
                    'passport_id' => $passportData->id,
                ],
                [
                    'demand_id' => $demand_id,
                    'contract_id' => $contract_id,
                    'overseas_agencies_id' => $overseas_agencies_id,
                    'name' => $passportData->name,
                    'passport' => $passportData->passport,
                    'passport_id' => $passportData->id,
                ],
            );

            // $labourManage = new LabourManagement();
            // $labourManage->demand_id = $demand_id;
            // $labourManage->contract_id = $contract_id;
            // $labourManage->overseas_agencies_id = $overseas_agencies_id;
            // $labourManage->name = $passportData->name;
            // $labourManage->passport = $passportData->passport;
            // $labourManage->passport_id = $passportData->id;
            // $labourManage->save();
        }

        return json_encode(array(
            'passport_id' => $passportId,
            'contract_id' => $contract_id,
            "statusCode" => 200,
        ));
    }


    public function viewContractLabour($id)
    {
        $contract = Contract::findOrFail($id);

        $passports = Passport::where('reject_status', NULL)
            ->whereHas('labour_management_table', function ($q) use ($id) {
                $q->where('contract_id', $id);
            })->paginate(100);

        $total_passports =  Passport::where('reject_status', NULL)
            ->whereHas('labour_management_table', function ($q) use ($id) {
                $q->where('contract_id', $id);
            })->count();

        return view('labour_management.contract_labour', compact('contract', 'passports', 'total_passports'));
    }



    public function store(StoreLabourManagement $request)
    {
        $demand_id = $request->demand_id;
        $contract_id = $request->contract_id;
        $overseas_agencies_id = $request->overseas_agencies_id;

        Excel::import(new ImportLabourManagement($demand_id, $contract_id, $overseas_agencies_id), request()->file('labour_lists'));
        return redirect()->back()->with('success', 'Your processing has been completed.');
    }



    public function destroy($id)
    {
        $passport = LabourManagement::findOrFail($id);
        $passport->delete();
        return redirect()->back()->with('success', 'Your processing has been completed.');
    }



    public function sendingLabour($id)
    {
        $sending = Sending::findOrFail($id);
        $passports = Passport::where('reject_status', NULL)
            ->whereHas('labour_management_table', function ($q) use ($id) {
                $q->where('sending_id', $id);
            })->paginate(100);

        $total_passports =  Passport::where('reject_status', NULL)
            ->whereHas('labour_management_table', function ($q) use ($id) {
                $q->where('sending_id', $id);
            })->count();

        return view('labour_management.sending_labour', compact('sending', 'passports', 'total_passports'));
    }


    public function removeFromSending($id)
    {
        $passport = LabourManagement::findOrFail($id);
        $passport->sending_id = null;
        $passport->update();
        return redirect()->back()->with('success', 'Your processing has been completed.');
    }


    public function contractLabourPassportExport($id)
    {
        $passports = Passport::where('reject_status', NULL)
            ->whereHas('labour_management_table', function ($q) use ($id) {
                $q->where('contract_id', $id);
            })->get();

        return Excel::download(new ExportPassport($passports), 'passport_' . date("Y-m-d H:i:s") . '.xlsx');
    }



    public function sendingLabourPassportExport($id)
    {
        $passports = Passport::where('reject_status', NULL)
            ->whereHas('labour_management_table', function ($q) use ($id) {
                $q->where('sending_id', $id);
            })->get();

        return Excel::download(new ExportPassport($passports), 'passport_' . date("Y-m-d H:i:s") . '.xlsx');
    }
}
