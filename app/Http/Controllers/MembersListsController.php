<?php

namespace App\Http\Controllers;

use App\Models\AgentList;
use App\Models\MembersLists;
use Illuminate\Http\Request;

class MembersListsController extends Controller
{
    public function store(Request $request)
    {
        $agent_list_id = $request->agent_list_id;
        if ($request->hasFile('members_list_files')) {
            foreach ($request->file('members_list_files') as $key => $file) {
                $path = $file->store('public/members_lists');
                $original_name = $file->getClientOriginalName();

                $insert[$key]['file_path'] = $path;
                $insert[$key]['file_name'] = $original_name;
                $insert[$key]['agent_list_id'] = $agent_list_id;
                $insert[$key]['user_id'] = auth()->user()->id ?? 0;
                $insert[$key]['created_at'] =  date('Y-m-d H:i:s');
                $insert[$key]['updated_at'] =  date('Y-m-d H:i:s');
            }
            MembersLists::insert($insert);
        }
        return redirect()->back()->with('success', 'Your processing has been completed.');
    }


    public function show($id)
    {
        $agent_list = AgentList::findOrFail($id);
        $members_lists = MembersLists::where('agent_list_id', $id)->get();
        return view('members_lists.show', compact('agent_list', 'members_lists'));
    }

    public function destroy($id)
    {
        $member = MembersLists::findOrFail($id);
        $member->delete();
        return redirect()->back()->with('success', 'Your processing has been completed.');
    }
}
