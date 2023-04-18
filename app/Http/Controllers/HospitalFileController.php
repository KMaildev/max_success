<?php

namespace App\Http\Controllers;

use App\Models\Hospital;
use App\Models\HospitalFile;
use Illuminate\Http\Request;

class HospitalFileController extends Controller
{
    public function hospitalDocsManagement($id)
    {
        $hospital = Hospital::findOrFail($id);
        $file_managements = HospitalFile::where('hospital_id', $id)->get();
        return view('hospital_docs_management.index', compact('file_managements', 'hospital'));
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'hospital_id' => 'required',
        ]);

        $hospital_id = $request->hospital_id;
        if ($request->hasFile('files')) {
            foreach ($request->file('files') as $key => $file) {
                $path = $file->store('public/attachment_files');
                $original_name = $file->getClientOriginalName();
                $insert[$key]['file_path'] = $path;
                $insert[$key]['file_name'] = $original_name;

                $insert[$key]['hospital_id'] = $hospital_id;
                $insert[$key]['user_id'] = auth()->user()->id ?? 0;

                $insert[$key]['upload_date'] = date('Y-m-d');
                $insert[$key]['created_at'] =  date('Y-m-d H:i:s');
                $insert[$key]['updated_at'] =  date('Y-m-d H:i:s');
            }
            HospitalFile::insert($insert);
        }
        return redirect()->back()->with('success', 'Your processing has been completed.');
    }


    public function destroy($id)
    {
        $member = HospitalFile::findOrFail($id);
        $member->delete();
        return redirect()->back()->with('success', 'Your processing has been completed.');
    }
}
