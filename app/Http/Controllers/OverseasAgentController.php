<?php

namespace App\Http\Controllers;

use App\Exports\OverseasAgencyExport;
use App\Http\Requests\StoreOverseaAgency;
use App\Http\Requests\UpdateOverseaAgency;
use App\Models\Country;
use App\Models\OverseasAgency;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class OverseasAgentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $overseas_agencies = OverseasAgency::query();
        if (session('country_id')) {
            $overseas_agencies = $overseas_agencies->where('countrie_id', session('country_id'));
        }
        $overseas_agencies = $overseas_agencies->get();
        return view('overseas_agent.index', compact('overseas_agencies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $countryies = Country::all();
        return view('overseas_agent.create', compact('countryies'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOverseaAgency $request)
    {
        $oversea = new OverseasAgency();
        $oversea->company_name = $request->company_name;
        $oversea->type_of_company = $request->type_of_company;
        $oversea->company_phone = $request->company_phone;
        $oversea->company_email = $request->company_email;
        $oversea->company_address = $request->company_address;
        $oversea->countrie_id = $request->countrie_id;
        $oversea->contact = $request->contact;
        $oversea->remark = $request->remark;

        $oversea->agent_company_name = $request->agent_company_name;
        $oversea->agent_contact_person = $request->agent_contact_person;
        $oversea->agent_phone = $request->agent_phone;
        $oversea->agent_email = $request->agent_email;
        $oversea->agent_address = $request->agent_address;

        $oversea->save();
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
        $countryies = Country::all();
        $overseas_agency = OverseasAgency::findOrFail($id);
        return view('overseas_agent.edit', compact('countryies', 'overseas_agency'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateOverseaAgency $request, $id)
    {
        $oversea = OverseasAgency::findOrFail($id);
        $oversea->company_name = $request->company_name;
        $oversea->type_of_company = $request->type_of_company;
        $oversea->company_phone = $request->company_phone;
        $oversea->company_email = $request->company_email;
        $oversea->company_address = $request->company_address;
        $oversea->countrie_id = $request->countrie_id;
        $oversea->contact = $request->contact;
        $oversea->remark = $request->remark;

        $oversea->agent_company_name = $request->agent_company_name;
        $oversea->agent_contact_person = $request->agent_contact_person;
        $oversea->agent_phone = $request->agent_phone;
        $oversea->agent_email = $request->agent_email;
        $oversea->agent_address = $request->agent_address;
        $oversea->update();
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
        $oversea = OverseasAgency::findOrFail($id);
        $oversea->delete();
        return redirect()->back()->with('success', 'Process is completed.');
    }


    public function dependentAjax($id)
    {
        $overseas_agencies = OverseasAgency::get()->where('countrie_id', $id);
        return json_encode($overseas_agencies);
    }


    public function findOverseaAgentAjax($id)
    {
        $overseas_agency = OverseasAgency::findOrFail($id);
        return json_encode($overseas_agency);
    }

    public function overseasAgentExportExcel(Request $request)
    {
        return Excel::download(new OverseasAgencyExport(), 'excel_' . date("Y-m-d H:i:s") . '.xlsx');
    }
}
