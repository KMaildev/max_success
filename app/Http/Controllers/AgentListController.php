<?php

namespace App\Http\Controllers;

use App\Exports\AgentListExport;
use App\Http\Requests\StoreAgentList;
use App\Http\Requests\UpdateAgentList;
use App\Models\AgentList;
use App\Models\MembersLists;
use App\Models\Region;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class AgentListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $search = request('search');
        $agent_lists = AgentList::query()
            ->where('name', 'LIKE', "%{$search}%")
            ->orWhere('agent_code', 'LIKE', "%{$search}%")
            ->orWhere('email', 'LIKE', "%{$search}%")
            ->orWhere('phone', 'LIKE', "%{$search}%")
            ->orWhere('address', 'LIKE', "%{$search}%")
            ->withCount('passport_table')
            ->get();
        // return $agent_lists;
        return view('agent_list.index', compact('agent_lists'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $regions = Region::all();
        return view('agent_list.create', compact('regions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAgentList $request)
    {

        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $photo_path = $photo->store('public/agents');
        }

        if ($request->hasFile('nrc_front')) {
            $nrc_front = $request->file('nrc_front');
            $nrc_front_path = $nrc_front->store('public/agents');
        }

        if ($request->hasFile('nrc_back')) {
            $nrc_back = $request->file('nrc_back');
            $nrc_back_path = $nrc_back->store('public/agents');
        }

        $oversea = new AgentList();
        $countTotal = AgentList::count();
        $count_no = sprintf('%04d', $countTotal + 1);

        $oversea->agent_code = sprintf('NGW-SA-' . $count_no);
        $oversea->name = $request->name;
        $oversea->phone = $request->phone;
        $oversea->email = $request->email;
        $oversea->address = $request->address;
        
        $oversea->region_id = $request->region_id;
        $oversea->township_id = $request->township_id;
        $oversea->remark = $request->remark;
        $oversea->add_user_id = auth()->user()->id ?? 0;
        $oversea->join_date = $request->join_date;

        $oversea->photo = $photo_path ?? '';
        $oversea->nrc_front = $nrc_front_path ?? '';
        $oversea->nrc_back = $nrc_back_path ?? '';
        $oversea->nrc = $request->nrc;

        $oversea->nrc_code = $request->nrcCode;
        $oversea->nrc_name = $request->nrcName;
        $oversea->nrc_type = $request->nrcType;
        $oversea->nrc_number = $request->nrcFieldCode;

        $oversea->save();
        $agent_list_id = $oversea->id;

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

        return redirect()->back()->with('success', 'Process is completed.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $agent_list = AgentList::findOrFail($id);
        return view('agent_list.show', compact('agent_list'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $agent_list = AgentList::findOrFail($id);
        $regions = Region::all();
        return view('agent_list.edit', compact('agent_list', 'regions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAgentList $request, $id)
    {
        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $photo_path = $photo->store('public/agents');
        }

        if ($request->hasFile('nrc_front')) {
            $nrc_front = $request->file('nrc_front');
            $nrc_front_path = $nrc_front->store('public/agents');
        }

        if ($request->hasFile('nrc_back')) {
            $nrc_back = $request->file('nrc_back');
            $nrc_back_path = $nrc_back->store('public/agents');
        }

        $agent_list = AgentList::findOrFail($id);
        $agent_list->name = $request->name;
        $agent_list->phone = $request->phone;
        $agent_list->email = $request->email;
        $agent_list->address = $request->address;
        $agent_list->agent_code = $request->agent_code;
        $agent_list->nrc = $request->nrc;
        $agent_list->region_id = $request->region_id;
        $agent_list->township_id = $request->township_id;
        $agent_list->remark = $request->remark;
        $agent_list->add_user_id = auth()->user()->id ?? 0;
        $agent_list->join_date = $request->join_date;

        $agent_list->photo = $photo_path ?? $agent_list->photo;
        $agent_list->nrc_front = $nrc_front_path ?? $agent_list->nrc_front;
        $agent_list->nrc_back = $nrc_back_path ?? $agent_list->nrc_back;
        $agent_list->update();
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
        $oversea = AgentList::findOrFail($id);
        $oversea->delete();
        return redirect()->back()->with('success', 'Process is completed.');
    }

    public function agentListExportExcel(Request $request)
    {
        return Excel::download(new AgentListExport(), 'excel_' . date("Y-m-d H:i:s") . '.xlsx');
    }
}
