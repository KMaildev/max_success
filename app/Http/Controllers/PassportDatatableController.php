<?php

namespace App\Http\Controllers;

use App\Models\MedicalTest;
use App\Models\Passport;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;

class PassportDatatableController extends Controller
{

    public function labourLists(Request $request)
    {
        $data = Passport::with('agent_list_table')
            ->where('reject_status', NULL)
            ->orderBy('id', 'DESC');

        return DataTables::of($data)
            ->addIndexColumn()

            ->editColumn('agent_name', function ($each) {
                return  $each->agent_list_table ? $each->agent_list_table->name : $each->local_agent_name;
            })

            ->filterColumn('agent_name', function ($query, $keyword) {
                $query->whereHas('agent_list_table', function ($q1) use ($keyword) {
                    $q1->where('name', 'like', '%' . $keyword . '%');
                });
            })

            ->editColumn('gender', function ($each) {
                return  ucfirst($each->gender ?? '');
            })

            ->filterColumn('gender', function ($query, $keyword) {
                $query->where('gender', $keyword);
            })


            ->editColumn('interview', function ($each) {
                return  $each->agent_list_table ? $each->agent_list_table->name : $each->local_agent_name;
            })

            ->addColumn('edit', function ($each) {
                $edit =
                    '
                        <button type="button" class="btn btn-sm btn-block btn-primary"
                            id="editPassport"
                            data-id="' . $each->id . '"
                            >
                            <i class="fa fa-fw fa-pencil"></i>
                        </button>
                    ';
                return $edit;
            })

            ->addIndexColumn()
            ->rawColumns(['agent_name', 'country', 'edit'])
            ->make(true);
    }


    public function index(Request $request)
    {
        $data = Passport::with('agent_list_table', 'medical_tests_status')
            ->where('reject_status', NULL)
            ->orderBy('id', 'DESC');

        return DataTables::of($data)
            ->addIndexColumn()

            ->editColumn('agent_name', function ($each) {
                return  $each->agent_list_table ? $each->agent_list_table->name : $each->local_agent_name;
            })

            ->filterColumn('agent_name', function ($query, $keyword) {
                $query->whereHas('agent_list_table', function ($q1) use ($keyword) {
                    $q1->where('name', 'like', '%' . $keyword . '%');
                });
            })

            ->editColumn('name', function ($each) {
                $html = '';
                $html .= $each->name;
                return $html;
            })

            ->editColumn('passport', function ($each) {
                $html = '';
                $html .= $each->passport;
                return $html;
            })

            ->editColumn('nrc', function ($each) {
                $html = '';
                $html .= $each->nrc;
                return $html;
            })

            ->editColumn('medical_tests_status', function ($each) {
                return  $each->medical_tests_status ? $each->medical_tests_status->failed_or_pass : '';
            })

            ->addColumn('action', function ($each) {
                $actions =
                    '
                        <button class="btn btn-info btn-xs" type="button" 
                            id="addToMedicalTest"
                            data-id="' . $each->id . '"
                        >
                            Choose
                        </button>
                    ';
                return $actions;
            })

            ->addIndexColumn()
            ->rawColumns(['agent_name', 'name', 'passport', 'nrc', 'medical_tests_status', 'action'])
            ->make(true);
    }


    public function medicalTestsPassLabour(Request $request)
    {
        $data = MedicalTest::with('passport_table', 'agent_lists_table')
            ->where('failed_or_pass', 'Pass')
            ->orderBy('id', 'DESC');

        return DataTables::of($data)
            ->addIndexColumn()

            ->editColumn('agent_name', function ($each) {
                return  $each->passport_table->agent_list_table ? $each->passport_table->agent_list_table->name : '-';
            })

            ->filterColumn('agent_name', function ($query, $keyword) {
                $query->whereHas('agent_lists_table', function ($q1) use ($keyword) {
                    $q1->where('name', 'like', '%' . $keyword . '%');
                });
            })

            ->editColumn('name', function ($each) {
                $html = '';
                $html .= $each->passport_table->name;
                return $html;
            })

            ->filterColumn('name', function ($query, $keyword) {
                $query->whereHas('passport_table', function ($q1) use ($keyword) {
                    $q1->where('name', 'like', '%' . $keyword . '%');
                });
            })

            ->editColumn('passport', function ($each) {
                $html = '';
                $html .= $each->passport_table->passport;
                return $html;
            })

            ->filterColumn('passport', function ($query, $keyword) {
                $query->whereHas('passport_table', function ($q1) use ($keyword) {
                    $q1->where('passport', 'like', '%' . $keyword . '%');
                });
            })

            ->editColumn('nrc', function ($each) {
                $html = '';
                $html .= $each->passport_table->nrc;
                return $html;
            })

            ->filterColumn('nrc', function ($query, $keyword) {
                $query->whereHas('passport_table', function ($q1) use ($keyword) {
                    $q1->where('nrc', 'like', '%' . $keyword . '%');
                });
            })

            ->editColumn('medical_tests_status', function ($each) {
                return  $each->failed_or_pass ? $each->failed_or_pass : '';
            })

            ->addColumn('action', function ($each) {
                $actions =
                    '
                        <button class="btn btn-info btn-xs" type="button" 
                            id="addToMedicalTest"
                            data-id="' . $each->passport_id . '"
                        >
                            Choose
                        </button>
                    ';
                return $actions;
            })

            ->addIndexColumn()
            ->rawColumns(['agent_name', 'name', 'passport', 'nrc', 'medical_tests_status', 'action'])
            ->make(true);
    }
}
