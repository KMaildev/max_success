<?php

namespace App\Http\Controllers;

use App\Exports\MedicalTestExport;
use App\Http\Requests\StoreMedicalTest;
use App\Models\Hospital;
use App\Models\MedicalTest;
use App\Models\MedicalTestTempList;
use App\Models\Passport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class MedicalTestController extends Controller
{
    public function index(Request $request)
    {
        $hospitals = Hospital::all();
        $passports = MedicalTest::where('failed_or_pass', 'Pass')
            ->orWhere('failed_or_pass', NULL)
            ->paginate(50);

        if (request('search')) {
            $passports = MedicalTest::where('failed_or_pass', 'Pass')
                ->orWhere('failed_or_pass', NULL)
                ->whereHas('passport_table', function ($query) {
                    $query->where('name', request('search'));
                    $query->orWhere('nrc', request('search'));
                    $query->orWhere('passport', request('search'));
                })->paginate(50);
        }

        if (request('hospital_id')) {
            $passports = MedicalTest::where('hospital_id', request('hospital_id'))
                ->paginate(50);
        }

        return view('medical_test.index', compact('passports', 'hospitals'));
    }


    public function medicalFailedLabour(Request $request)
    {
        $hospitals = Hospital::all();

        $passports = MedicalTest::where('failed_or_pass', 'Failed')
            ->paginate(50);

        if (request('search')) {
            $passports = MedicalTest::where('failed_or_pass', 'Failed')
                ->whereHas('passport_table', function ($query) {
                    $query->where('name', request('search'));
                    $query->orWhere('nrc', request('search'));
                    $query->orWhere('passport', request('search'));
                })->paginate(50);
        }

        if (request('hospital_id')) {
            $passports = MedicalTest::where('failed_or_pass', 'Failed')
                ->where('hospital_id', request('hospital_id'))
                ->paginate(50);
        }

        return view('medical_test.failed', compact('passports', 'hospitals'));
    }


    public function create()
    {
        $hospitals = Hospital::all();
        return view('medical_test.create', compact('hospitals'));
    }

    public function store(StoreMedicalTest $request)
    {
        $session_id = session()->getId();
        $medical_test_temp_lists = MedicalTestTempList::where('session_id', $session_id)->get();

        $count = MedicalTestTempList::where('session_id', $session_id)->count();
        if ($count == 0) {
            return redirect()->back()->with('error', 'Please choose worker');
        } else {
            foreach ($medical_test_temp_lists as $key => $medical_test_temp_list) {
                MedicalTest::create([
                    'medical_test_date' => $request->medical_test_date,
                    'hospital_id' => $request->hospital_id,
                    'passport_id' => $medical_test_temp_list->passport_id,
                    'agent_list_id' => $medical_test_temp_list->agent_list_id,
                    'user_id' => auth()->user()->id,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }

            MedicalTestTempList::where('session_id', $session_id)
                ->where('types', 'medical_test')
                ->delete();
        }
        return redirect()->back()->with('success', 'Your processing has been completed.');
    }

    public function destroy($id)
    {
        $oversea = MedicalTest::findOrFail($id);
        $oversea->delete();
        return redirect()->back()->with('success', 'Process is completed.');
    }


    public function updatePassFailed(Request $request)
    {
        $id = $request->id;
        $value = $request->value;
        $temp = MedicalTest::findOrFail($id);
        $temp->failed_or_pass = $value;
        $temp->update();
        return json_encode(array(
            "statusCode" => 200,
        ));
    }


    public function addMedicalTestTempList(Request $request)
    {
        $this->validate($request, [
            'id' => 'required',
        ]);

        $passport_id = $request->id;
        $passport = Passport::findOrFail($passport_id);

        MedicalTestTempList::updateOrCreate(
            [
                'passport_id' => $passport->id,
            ],
            [
                'agent_name' => $passport->agent_list_table->name ?? '',
                'name' => $passport->name ?? '',
                'passport' => $passport->passport ?? '',
                'nrc' => $passport->nrc ?? '',
                'passport_id' => $passport->id,
                'agent_list_id' => $passport->agent_list_id,
                'session_id' => session()->getId(),
                'user_id' => auth()->user()->id,
                'types' => $request->types,
            ],
        );

        // MedicalTestTempList::create(
        //     [
        //         'agent_name' => $passport->agent_list_table->name ?? '',
        //         'name' => $passport->name ?? '',
        //         'passport' => $passport->passport ?? '',
        //         'nrc' => $passport->nrc ?? '',
        //         'passport_id' => $passport->id,
        //         'agent_list_id' => $passport->agent_list_id,
        //         'session_id' => session()->getId(),
        //         'user_id' => auth()->user()->id,
        //         'types' => $request->types,
        //     ]
        // );

        return json_encode(array(
            "statusCode" => 200
        ));
    }

    public function getMedicalTestTempList(Request $request)
    {
        $session_id = session()->getId();
        $medical_test_temp_lists = MedicalTestTempList::where('types', 'medical_test')
            ->where('session_id', $session_id)
            ->get();
        echo json_encode($medical_test_temp_lists);
    }


    public function getMedicalTestTempListInterview(Request $request)
    {
        $session_id = session()->getId();
        $medical_test_temp_lists = MedicalTestTempList::where('types', 'interview_labour')
            ->where('session_id', $session_id)
            ->get();
        echo json_encode($medical_test_temp_lists);
    }


    public function removeMedicalTestTempList($id)
    {
        $temp = MedicalTestTempList::findOrFail($id);
        $temp->delete();
        return json_encode(array(
            "statusCode" => 200,
        ));
    }

    public function medicalTestExportExcel(Request $request)
    {
        return Excel::download(new MedicalTestExport(), 'excel_' . date("Y-m-d H:i:s") . '.xlsx');
    }
}
