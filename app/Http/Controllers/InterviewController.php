<?php

namespace App\Http\Controllers;

use App\Exports\InterviewExport;
use App\Http\Requests\StoreInterview;
use App\Http\Requests\UpdateInterview;
use App\Models\Demand;
use App\Models\Interview;
use App\Models\InterviewLabour;
use App\Models\OverseasAgency;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class InterviewController extends Controller
{
    public function index(Request $request)
    {
        $overseas_agencies = OverseasAgency::all();
        $interviews = Interview::paginate(100);
        $demands = Demand::all();

        if (request('overseas_agencie_id')) {
            $overseas_agencie_id = request('overseas_agencie_id');
            $interviews = Interview::whereHas('demands_table', function ($q) use ($overseas_agencie_id) {
                $q->where('overseas_agencie_id', $overseas_agencie_id);
            })->paginate(100);
        }

        if (request('from_date') && request('to_date')) {
            $from_date = request('from_date');
            $to_date = request('to_date');
            $interviews = Interview::whereBetween('interview_date', [$from_date, $to_date])
                ->paginate(100);
        }

        return view('interview.index', compact('overseas_agencies', 'interviews', 'demands'));
    }


    public function create()
    {
        $demands = Demand::all();
        return view('interview.create', compact('demands'));
    }


    public function store(StoreInterview $request)
    {
        $interview = new Interview();
        $interview->interview_title = $request->interview_title;
        $interview->interview_date = $request->interview_date;
        $interview->interview_male = $request->interview_male ?? 0;
        $interview->interview_female = $request->interview_female ?? 0;
        $interview->remark = $request->remark;
        $interview->demand_id = $request->demand_id;
        $interview->save();
        return redirect()->back()->with('success', 'Process is completed.');
    }

    public function edit($id)
    {
        $interview = Interview::findOrFail($id);
        $demands = Demand::all();
        return view('interview.edit', compact('interview', 'demands'));
    }

    public function update(UpdateInterview $request, $id)
    {
        $interview = Interview::findOrFail($id);
        $interview->interview_title = $request->interview_title;
        $interview->interview_date = $request->interview_date;
        $interview->interview_male = $request->interview_male ?? 0;
        $interview->interview_female = $request->interview_female ?? 0;
        $interview->remark = $request->remark;
        $interview->demand_id = $request->demand_id;
        $interview->update();
        return redirect()->back()->with('success', 'Process is completed.');
    }

    public function show($id)
    {
        $interview = Interview::findOrFail($id);
        $interview_labours = InterviewLabour::where('interview_id', $id)
            ->get();
        return view('interview.show', compact('interview', 'interview_labours'));
    }

    public function interviewExportExcel(Request $request)
    {
        return Excel::download(new InterviewExport(), 'excel_' . date("Y-m-d H:i:s") . '.xlsx');
    }

    public function interviewEditFormAjax($id){
        $interview = Interview::findOrFail($id);
        $demands = Demand::all();

        return response()->json([
            'html' => view('interview.shared.edit_form', compact('interview', 'demands'))
                ->render()
        ]);
    }
}
