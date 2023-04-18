<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLabourPayment;
use App\Models\Passport;
use App\Models\PassportPayment;
use App\Models\PassportPaymentFile;
use Illuminate\Http\Request;

class LabourPaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $payments = PassportPayment::paginate(100);

        if (request('from_date') && request('to_date')) {
            $payments = PassportPayment::whereBetween('deposit_date', [request('from_date'), request('to_date')])
                ->paginate(100);
        }

        if (request('search')) {
            $payments = PassportPayment::whereHas('passport_table', function ($query) {
                $query->where('name', 'Like', '%' . request('search') . '%');
                $query->orWhere('father_name', 'Like', '%' . request('search') . '%');
                $query->orWhere('nrc', 'Like', '%' . request('search') . '%');
                $query->orWhere('date_of_birth', 'Like', '%' . request('search') . '%');
                $query->orWhere('passport', 'Like', '%' . request('search') . '%');
                $query->orWhere('address', 'Like', '%' . request('search') . '%');
                $query->orWhere('remark', 'Like', '%' . request('search') . '%');
                $query->orWhere('phone', 'Like', '%' . request('search') . '%');
            })->get();
        }

        return view('labour_payment.index', compact('payments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $passports = Passport::all();
        return view('labour_payment.create', compact('passports'));
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


        $passport_payment->user_id = auth()->user()->id;
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
}
