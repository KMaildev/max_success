<?php

namespace App\Http\Controllers;

use App\Models\LabourDocs;
use App\Models\Passport;
use Illuminate\Http\Request;

class LabourDocsController extends Controller
{
    public function labourDocsManagement($id)
    {
        $passport = Passport::findOrFail($id);
        $file_managements = LabourDocs::where('passport_id', $id)->get();
        return view('labour_docs_management.index', compact('file_managements', 'passport'));
    }


    public function store(Request $request)
    {
        $passport_id = $request->passport_id;

        if ($request->hasFile('files')) {
            foreach ($request->file('files') as $key => $file) {
                $path = $file->store('public/labour_files');
                $original_name = $file->getClientOriginalName();
                $insert[$key]['file_path'] = $path;
                $insert[$key]['file_name'] = $original_name;

                $insert[$key]['passport_id'] = $passport_id;
                $insert[$key]['user_id'] = auth()->user()->id ?? 0;

                $insert[$key]['upload_date'] = date('Y-m-d');
                $insert[$key]['created_at'] =  date('Y-m-d H:i:s');
                $insert[$key]['updated_at'] =  date('Y-m-d H:i:s');
            }
            LabourDocs::insert($insert);
        }
        return redirect()->back()->with('success', 'Your processing has been completed.');
    }

    public function destroy($id)
    {
        $member = LabourDocs::findOrFail($id);
        $member->delete();
        return redirect()->back()->with('success', 'Your processing has been completed.');
    }
}
