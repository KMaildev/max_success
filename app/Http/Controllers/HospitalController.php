<?php

namespace App\Http\Controllers;

use App\Exports\HospitalExport;
use App\Http\Requests\StoreHospital;
use App\Http\Requests\UpdateHospital;
use App\Models\Hospital;
use App\Models\HospitalFile;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class HospitalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $search = request('search');
        $countryies = Hospital::query()
            ->where('name', 'LIKE', "%{$search}%")
            ->orWhere('remark', 'LIKE', "%{$search}%")
            ->get();
        return view('hospital.index', compact('countryies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('hospital.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreHospital $request)
    {
        $h = new Hospital();
        $h->name = $request->name;
        $h->location = $request->location;
        $h->phone = $request->phone;
        $h->remark = $request->remark;
        $h->submit_date = $request->submit_date;
        $h->save();
        $hospital_id = $h->id;

        if ($request->hasFile('attachment_files')) {
            foreach ($request->file('attachment_files') as $key => $file) {
                $path = $file->store('public/attachment_files');
                $original_name = $file->getClientOriginalName();

                $insert[$key]['file_path'] = $path;
                $insert[$key]['file_name'] = $original_name;
                $insert[$key]['hospital_id'] = $hospital_id;
                $insert[$key]['user_id'] = auth()->user()->id ?? 0;
                $insert[$key]['upload_date'] =  date('Y-m-d');
                $insert[$key]['created_at'] =  date('Y-m-d H:i:s');
                $insert[$key]['updated_at'] =  date('Y-m-d H:i:s');
            }
            HospitalFile::insert($insert);
        }
        return redirect()->back()->with('success', 'Your processing has been completed.');
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
        $country = Hospital::findOrFail($id);
        return view('hospital.edit', compact('country'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateHospital $request, $id)
    {
        $h = Hospital::findOrFail($id);
        $h->name = $request->name;
        $h->location = $request->location;
        $h->phone = $request->phone;
        $h->remark = $request->remark;
        $h->submit_date = $request->submit_date ?? $h->submit_date;
        $h->update();
        return redirect()->back()->with('success', 'Process is completed.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $country = Hospital::findOrFail($id);
        $country->delete();
        return redirect()->back()->with('success', 'Process is completed.');
    }

    public function hospitalExportExcel(Request $request)
    {
        $hospitals = Hospital::all();
        return Excel::download(new HospitalExport($hospitals), 'excel_' . date("Y-m-d H:i:s") . '.xlsx');
    }
}
