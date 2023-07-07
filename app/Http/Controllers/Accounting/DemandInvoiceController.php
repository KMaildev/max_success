<?php

namespace App\Http\Controllers\Accounting;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreDemandInvoice;
use App\Http\Requests\UpdateDemandInvoice;
use App\Models\Demand;
use App\Models\DemandInvoice;
use App\Models\OverseasAgency;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class DemandInvoiceController extends Controller
{
    public function index()
    {
        return view('accounting.demand_invoice.index');
    }

    public function create()
    {
        $overseas_agencies = OverseasAgency::all();
        return view('accounting.demand_invoice.create', compact('overseas_agencies'));
    }

    public function store(StoreDemandInvoice $request)
    {
        $demand_invoices = new DemandInvoice();
        $demand_invoices->invoice_no = $request->invoice_no;
        $demand_invoices->submit_date = $request->submit_date;
        $demand_invoices->overseas_agencie_id = $request->overseas_agencie_id;
        $demand_invoices->demand_id = $request->demand_id;
        $demand_invoices->amount = $request->amount;
        $demand_invoices->total_labour = $request->total_labour;
        $demand_invoices->remark = $request->remark;
        $demand_invoices->user_id = auth()->user()->id;
        $demand_invoices->save();

        return redirect()->back()->with('success', 'Your processing has been completed.');
    }

    public function edit($id)
    {
        $overseas_agencies = OverseasAgency::all();
        $demand_invoice = DemandInvoice::findOrFail($id);
        return view('accounting.demand_invoice.edit', compact('overseas_agencies', 'demand_invoice'));
    }


    public function update(UpdateDemandInvoice $request, $id)
    {
        $demand_invoices = DemandInvoice::findOrFail($id);
        $demand_invoices->invoice_no = $request->invoice_no;
        $demand_invoices->submit_date = $request->submit_date;
        $demand_invoices->overseas_agencie_id = $request->overseas_agencie_id;
        $demand_invoices->demand_id = $request->demand_id;
        $demand_invoices->amount = $request->amount;
        $demand_invoices->total_labour = $request->total_labour;
        $demand_invoices->remark = $request->remark;
        $demand_invoices->user_id = auth()->user()->id;
        $demand_invoices->save();

        return redirect()->back()->with('success', 'Your processing has been completed.');
    }

    public function demand_invoice_datatable(Request $request)
    {
        $data = DemandInvoice::with('demand', 'overseas_agencies', 'cash_books')
            ->orderBy('id', 'DESC');

        return DataTables::of($data)

            ->addIndexColumn()

            ->editColumn('agent_company_name', function ($each) {
                return  $each->overseas_agencies ? $each->overseas_agencies->agent_company_name : '';
            })

            ->filterColumn('agent_company_name', function ($query, $keyword) {
                $query->whereHas('overseas_agencies', function ($q1) use ($keyword) {
                    $q1->where('agent_company_name', 'like', '%' . $keyword . '%');
                });
            })

            ->editColumn('company_name', function ($each) {
                return  $each->overseas_agencies ? $each->overseas_agencies->company_name : '';
            })

            ->filterColumn('company_name', function ($query, $keyword) {
                $query->whereHas('overseas_agencies', function ($q1) use ($keyword) {
                    $q1->where('company_name', 'like', '%' . $keyword . '%');
                });
            })

            ->editColumn('demand_number', function ($each) {
                return  $each->demand ? $each->demand->demand_number : $each->demand->demand_number;
            })

            ->filterColumn('demand_number', function ($query, $keyword) {
                $query->whereHas('demand', function ($q1) use ($keyword) {
                    $q1->where('demand_number', 'like', '%' . $keyword . '%');
                });
            })

            ->editColumn('issue_number', function ($each) {
                return  $each->demand ? $each->demand->issue_number : $each->demand->issue_number;
            })

            ->filterColumn('issue_number', function ($query, $keyword) {
                $query->whereHas('demand', function ($q1) use ($keyword) {
                    $q1->where('issue_number', 'like', '%' . $keyword . '%');
                });
            })

            ->editColumn('male', function ($each) {
                return  $each->demand ? $each->demand->male : $each->demand->male;
            })

            ->filterColumn('male', function ($query, $keyword) {
                $query->whereHas('demand', function ($q1) use ($keyword) {
                    $q1->where('male',  $keyword);
                });
            })

            ->editColumn('female', function ($each) {
                return  $each->demand ? $each->demand->female : $each->demand->female;
            })

            ->filterColumn('female', function ($query, $keyword) {
                $query->whereHas('demand', function ($q1) use ($keyword) {
                    $q1->where('female',  $keyword);
                });
            })

            ->editColumn('balance', function ($each) {
                $total_labour =  $each->total_labour ?? 0;
                $total_amount = $each->amount ?? 0;
                $balance = $total_labour * $total_amount;
                return number_format($balance, 2);
            })

            ->editColumn('status', function ($each) {
                $total_labour =  $each->total_labour ?? 0;
                $total_amount = $each->amount ?? 0;
                $balance = $total_labour * $total_amount;


                $expense = [];
                foreach ($each->cash_books as $key => $value) {
                    $expense[] = $value->expense;
                }
                $total_exp = array_sum($expense);

                if ($total_exp == 0) {
                    return '<span class="badge bg-red">Nothing to Pay</span>';
                } elseif ($balance == $total_exp) {
                    return '<span class="badge bg-green">Paid</span>';
                } else {
                    return '<span class="badge bg-blue">Partial</span>';
                }
            })

            ->addColumn('action', function ($each) {
                $edit_route = route('demand_invoice.edit', 1);
                $oversea_company_report = route('oversea_company_report.show', $each->overseas_agencie_id);
                $action =
                    '
                    <div class="btn-group">
                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Action <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="' . $edit_route . '">
                                    Edit
                                </a>
                            </li>

                            <li>
                                <a href="' . $oversea_company_report . '" target="_blank">
                                    Detail
                                </a>
                            </li>
                        </ul>
                    </div>
                    ';
                return $action;
            })

            ->addIndexColumn()
            ->rawColumns(['agent_company_name', 'company_name', 'demand_number', 'issue_number', 'male', 'female', 'balance', 'status', 'action'])
            ->make(true);
    }




    public function demandInvoiceAjax($id)
    {
        $demand = DemandInvoice::with('overseas_agencies')
            ->findOrFail($id);
        return json_encode($demand);
    }
}
