<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreInterviewLabour;
use App\Models\Interview;
use App\Models\InterviewLabour;
use App\Models\MedicalTestTempList;
use Illuminate\Http\Request;

class InterviewLabourController extends Controller
{
    
    public function addInterviewWorker($id)
    {
        $interview = Interview::findOrFail($id);
        return view('interview_worker.add_interview_worker', compact('interview'));
    }


    public function store(StoreInterviewLabour $request)
    {
        $session_id = session()->getId();
        $medical_test_temp_lists = MedicalTestTempList::where('types', 'interview_labour')
            ->where('session_id', $session_id)
            ->get();

        $count = MedicalTestTempList::where('types', 'interview_labour')
            ->where('session_id', $session_id)
            ->count();
        if ($count == 0) {
            return redirect()->back()->with('error', 'Please choose labour');
        } else {
            foreach ($medical_test_temp_lists as $key => $medical_test_temp_list) {
                InterviewLabour::create([
                    'demand_id' => $request->demand_id,
                    'interview_id' => $request->interview_id,
                    'passport_id' => $medical_test_temp_list->passport_id,
                    'agent_list_id' => $medical_test_temp_list->agent_list_id,
                    'user_id' => auth()->user()->id,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }

            MedicalTestTempList::where('session_id', $session_id)
                ->where('types', 'interview_labour')
                ->delete();
        }

        return redirect()->back()->with('success', 'Your processing has been completed.');
    }
}
