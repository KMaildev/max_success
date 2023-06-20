<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLabourPayment;
use App\Models\Passport;
use App\Models\PassportPayment;
use App\Models\PassportPaymentFile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;

class LabourPaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('labour_payment.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $passports = Passport::all();
        $users = User::all();
        return view('labour_payment.create', compact('passports', 'users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLabourPayment $request)
    {
        $passport_id = $request->passport_id;
        $deposit_date = $request->deposit_date;
        $deposit_amount = $request->deposit_amount;

        $passport_payment = new PassportPayment();
        $passport_payment->deposit = $deposit_amount;
        $passport_payment->deposit_date = $deposit_date;
        $passport_payment->passport_id = $passport_id;

        $passport_payment->remark = $request->remark;
        $passport_payment->payment_reason = $request->payment_reason;


        $passport_payment->user_id = $request->user_id ?? auth()->user()->id;
        $passport_payment->save();
        $passport_payment_id = $passport_payment->id;

        if ($request->hasFile('deposit_vouchers')) {
            foreach ($request->file('deposit_vouchers') as $key => $file) {
                $path = $file->store('public/deposit_vouchers');
                $deposit_file_name = $file->getClientOriginalName();

                $insert[$key]['deposit_file_path'] = $path;
                $insert[$key]['deposit_file_name'] = $deposit_file_name;

                $insert[$key]['passport_payment_id'] = $passport_payment_id;
                $insert[$key]['passport_id'] = $passport_id;
                $insert[$key]['user_id'] = auth()->user()->id;
                $insert[$key]['created_at'] =  date('Y-m-d H:i:s');
                $insert[$key]['updated_at'] =  date('Y-m-d H:i:s');
            }
            PassportPaymentFile::insert($insert);
        }

        session()->flash('passport_id', $passport_id);
        return redirect()->back()->with('success', 'Your processing has been completed.');
    }

    public function labourPaymentFiles($id)
    {
        $passport = PassportPayment::findOrFail($id);
        $file_managements = PassportPaymentFile::where('passport_payment_id', $id)->get();
        return view('labour_payment.labour_payment_files', compact('file_managements', 'passport'));
    }


    public function labourPaymentFileUpload(Request $request)
    {

        $passport_id = $request->passport_id;
        $passport_payment_id = $request->passport_payment_id;

        if ($request->hasFile('deposit_vouchers')) {
            foreach ($request->file('deposit_vouchers') as $key => $file) {
                $path = $file->store('public/deposit_vouchers');
                $deposit_file_name = $file->getClientOriginalName();

                $insert[$key]['deposit_file_path'] = $path;
                $insert[$key]['deposit_file_name'] = $deposit_file_name;

                $insert[$key]['passport_payment_id'] = $passport_payment_id;
                $insert[$key]['passport_id'] = $passport_id;
                $insert[$key]['user_id'] = auth()->user()->id;
                $insert[$key]['created_at'] =  date('Y-m-d H:i:s');
                $insert[$key]['updated_at'] =  date('Y-m-d H:i:s');
            }
            PassportPaymentFile::insert($insert);
        }
        return redirect()->back()->with('success', 'Your processing has been completed.');
    }


    public function destroy($id)
    {
        $passport = PassportPaymentFile::findOrFail($id);
        $passport->delete();
        return redirect()->back()->with('success', 'Deleted successfully.');
    }


    public function labourPaymentDatatable(Request $request)
    {

        $data = PassportPayment::groupBy('passport_id')
            ->selectRaw('*, sum(deposit) as total_deposit')
            ->orderBy('id', 'DESC');

        return DataTables::of($data)

            ->addIndexColumn()

            ->editColumn('name', function ($each) {
                return  $each->passport_table ? $each->passport_table->name : $each->name;
            })

            ->filterColumn('name', function ($query, $keyword) {
                $query->whereHas('passport_table', function ($q1) use ($keyword) {
                    $q1->where('name', 'like', '%' . $keyword . '%');
                });
            })

            ->editColumn('nrc', function ($each) {
                return  $each->passport_table ? $each->passport_table->nrc : $each->nrc;
            })

            ->filterColumn('nrc', function ($query, $keyword) {
                $query->whereHas('passport_table', function ($q1) use ($keyword) {
                    $q1->where('nrc', 'like', '%' . $keyword . '%');
                });
            })

            ->editColumn('passport', function ($each) {
                return  $each->passport_table ? $each->passport_table->passport : $each->passport;
            })

            ->filterColumn('passport', function ($query, $keyword) {
                $query->whereHas('passport_table', function ($q1) use ($keyword) {
                    $q1->where('passport', 'like', '%' . $keyword . '%');
                });
            })

            ->editColumn('gender', function ($each) {
                return  $each->passport_table ? $each->passport_table->gender : $each->gender;
            })

            ->filterColumn('gender', function ($query, $keyword) {
                $query->whereHas('passport_table', function ($q1) use ($keyword) {
                    $q1->where('gender', 'like', '%' . $keyword . '%');
                });
            })

            ->editColumn('address', function ($each) {
                return  $each->passport_table ? $each->passport_table->address : '';
            })

            ->filterColumn('address', function ($query, $keyword) {
                $query->whereHas('passport_table', function ($q1) use ($keyword) {
                    $q1->where('address', 'like', '%' . $keyword . '%');
                });
            })

            ->editColumn('country', function ($each) {
                return  $each->passport_table ? $each->passport_table->selected_country : '';
            })

            ->filterColumn('country', function ($query, $keyword) {
                $query->whereHas('passport_table', function ($q1) use ($keyword) {
                    $q1->where('selected_country', 'like', '%' . $keyword . '%');
                });
            })


            ->editColumn('total_deposit', function ($each) {
                return  number_format($each->total_deposit, 2);
            })

            ->addColumn('history', function ($each) {
                $payment_detail = route('labour_payment_show', ['id' => $each->passport_id]);
                $history =
                    '
                    <a href="' . $payment_detail . '" class="btn btn-sm btn-block btn-primary">
                        History
                    </a>
                ';
                return $history;
            })

            ->addIndexColumn()
            ->rawColumns(['name', 'nrc', 'passport', 'gender', 'country', 'total_deposit', 'history'])
            ->make(true);
    }

    public function show($id)
    {
        $payments = PassportPayment::where('passport_id', $id)->get();
        return view('labour_payment.show', compact('payments'));
    }


    public function payment_history($id)
    {
        $payments = PassportPayment::where('passport_id', $id)
            ->get();

        $viewRender = view('labour_payment.payment_history', compact('payments'))
            ->render();

        return response()->json([
            'html' => $viewRender,
        ]);
    }
}
