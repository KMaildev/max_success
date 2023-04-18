<?php

namespace App\Http\Controllers;

use App\Models\Contract;
use App\Models\Demand;
use App\Models\FileManagement;
use App\Models\Sending;
use Illuminate\Http\Request;

class FileManagementController extends Controller
{
    public function fileUploadViewDemand($id)
    {
        $demand = Demand::findOrFail($id);
        $file_managements = FileManagement::where('demand_id', $id)->get();
        return view('file_management.demand', compact('file_managements', 'demand'));
    }


    public function fileUploadViewContract($id)
    {
        $contract = Contract::findOrFail($id);
        $file_managements = FileManagement::where('contract_id', $id)->get();
        return view('file_management.contract', compact('file_managements', 'contract'));
    }


    public function fileUploadViewSending($id)
    {
        $sending = Sending::findOrFail($id);
        $file_managements = FileManagement::where('sending_id', $id)->get();
        return view('file_management.sending', compact('file_managements', 'sending'));
    }


    public function store(Request $request)
    {
        $overseas_agencie_id = $request->overseas_agencie_id;
        $demand_id = $request->demand_id;
        $contract_id = $request->contract_id;
        $sending_id = $request->sending_id;

        if ($request->hasFile('files')) {
            foreach ($request->file('files') as $key => $file) {
                $path = $file->store('public/file_management');
                $original_name = $file->getClientOriginalName();
                $insert[$key]['file_path'] = $path;
                $insert[$key]['file_name'] = $original_name;

                $insert[$key]['overseas_agencie_id'] = $overseas_agencie_id;
                $insert[$key]['demand_id'] = $demand_id ?? 0;
                $insert[$key]['contract_id'] = $contract_id ?? 0;
                $insert[$key]['sending_id'] = $sending_id ?? 0;
                $insert[$key]['user_id'] = auth()->user()->id ?? 0;

                $insert[$key]['upload_date'] = date('Y-m-d');
                $insert[$key]['created_at'] =  date('Y-m-d H:i:s');
                $insert[$key]['updated_at'] =  date('Y-m-d H:i:s');
            }
            FileManagement::insert($insert);
        }
        return redirect()->back()->with('success', 'Your processing has been completed.');
    }


    public function destroy($id)
    {
        $member = FileManagement::findOrFail($id);
        $member->delete();
        return redirect()->back()->with('success', 'Your processing has been completed.');
    }
}
