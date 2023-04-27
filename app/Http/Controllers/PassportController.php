<?php

namespace App\Http\Controllers;

use App\Exports\ExportPassport;
use App\Http\Requests\PassportImportFile;
use App\Http\Requests\StorePassport;
use App\Http\Requests\UpdatePassport;
use App\Imports\PassportImport;
use App\Models\AgentList;
use App\Models\Contract;
use App\Models\Country;
use App\Models\Passport;
use App\Models\PassportPayment;
use App\Models\PassportPaymentFile;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class PassportController extends Controller
{
    public function index(Request $request)
    {
        $agent_lists = AgentList::all();
        $countries = Country::all();
        return view('passport.index', compact('agent_lists', 'countries'));
    }

    public function create()
    {
        $agent_lists = AgentList::all();
        $countries = Country::all();
        return view('passport.create', compact('agent_lists', 'countries'));
    }

    public function store(StorePassport $request)
    {

        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $photo_path = $photo->store('public/labour');
        }

        if ($request->hasFile('nrc_front')) {
            $nrc_front = $request->file('nrc_front');
            $nrc_front_path = $nrc_front->store('public/labour');
        }

        if ($request->hasFile('nrc_back')) {
            $nrc_back = $request->file('nrc_back');
            $nrc_back_path = $nrc_back->store('public/labour');
        }

        $Passport = new Passport();

        $countTotal = Passport::count();
        $count_no = sprintf('%06d', $countTotal + 1);
        $Passport->labour_code = sprintf('MS-LB-' . $count_no);

        $Passport->name = $request->name;
        $Passport->father_name = $request->father_name;
        $Passport->passport = $request->passport;
        $Passport->passport_date = $request->passport_date;
        $Passport->place_of_passport = $request->place_of_passport;
        $Passport->local_agent_name = $request->local_agent_name ?? '';
        $Passport->phone = $request->phone;
        $Passport->address = $request->address;
        $Passport->gender = $request->gender;
        $Passport->remark = $request->remark;
        $Passport->agent_list_id = $request->agent_list_id;
        $Passport->join_date = date("Y-m-d");
        $Passport->owic = $request->owic ?? '';
        $Passport->owic_date = $request->owic_date ?? '';
        $Passport->mother_name = $request->mother_name;
        $Passport->go_date = $request->go_date;
        $Passport->go_reason = $request->go_reason;
        $Passport->entry_date = $request->entry_date;
        $Passport->nation_religion = $request->nation_religion;
        $Passport->age = $request->age;
        $Passport->passport_expiry_date = $request->passport_expiry_date;
        $Passport->qualification = $request->qualification;
        $Passport->weight = $request->weight . '(lb)';
        $Passport->height = $request->height . '(cm)';
        $Passport->tatto = $request->tatto;
        $Passport->smoking = $request->smoking;
        $Passport->alcohol = $request->alcohol;
        $Passport->marital_status = $request->marital_status;
        $Passport->prominent_sign = $request->prominent_sign;
        $Passport->working_experience = $request->working_experience;
        $Passport->selected_country = $request->selected_country;
        $Passport->labour_card_no = $request->labour_card_no;
        $Passport->issue_of_labour_date = $request->issue_of_labour_date;

        $Passport->photo = $photo_path ?? '';
        $Passport->nrc_front = $nrc_front_path ?? '';
        $Passport->nrc_back = $nrc_back_path ?? '';

        $Passport->identification_card = $request->identification_card;
        $Passport->issue_date_of_id_card = $request->issue_date_of_id_card;
        $Passport->son = $request->son;
        $Passport->daughter = $request->daughter;
        $Passport->address_line_one = $request->address_line_one;
        $Passport->phone_family = $request->phone_family;
        $Passport->name_of_heir = $request->name_of_heir;
        $Passport->relative = $request->relative;
        $Passport->nrc_of_heir = $request->nrc_of_heir;
        $Passport->passport_register_status = $request->passport_register_status;
        $Passport->user_id = auth()->user()->id;
        $Passport->nrc_code = $request->nrcCode;
        $Passport->nrc_name = $request->nrcName;
        $Passport->nrc_type = $request->nrcType;
        $Passport->nrc_number = $request->nrcFieldCode;
        $Passport->nrc = $request->nrc;
        $Passport->date_of_birth =  $request->date_of_birth;
        $Passport->save();
        return redirect()->back()->with('success', 'Created successfully.');
    }

    public function show($id)
    {
        $passport = Passport::findOrFail($id);
        return view('passport.show', compact('passport'));
    }

    public function edit($id)
    {
        $passport = Passport::findOrFail($id);
        $agent_lists = AgentList::all();
        $countries = Country::all();
        return view('passport.edit', compact('passport', 'agent_lists', 'countries'));
    }

    public function update(UpdatePassport $request, $id)
    {


        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $photo_path = $photo->store('public/labour');
        }

        if ($request->hasFile('nrc_front')) {
            $nrc_front = $request->file('nrc_front');
            $nrc_front_path = $nrc_front->store('public/labour');
        }

        if ($request->hasFile('nrc_back')) {
            $nrc_back = $request->file('nrc_back');
            $nrc_back_path = $nrc_back->store('public/labour');
        }

        $Passport = Passport::findOrFail($id);
        $Passport->name = $request->name;
        $Passport->father_name = $request->father_name;
        $Passport->passport = $request->passport;
        $Passport->passport_date = $request->passport_date;
        $Passport->place_of_passport = $request->place_of_passport;
        $Passport->local_agent_name = $request->local_agent_name ?? '';
        $Passport->phone = $request->phone;
        $Passport->address = $request->address;
        $Passport->gender = $request->gender;
        $Passport->remark = $request->remark;
        $Passport->agent_list_id = $request->agent_list_id;
        $Passport->join_date = date("Y-m-d");

        $Passport->owic = $request->owic ?? '';
        $Passport->owic_date = $request->owic_date ?? '';

        $Passport->mother_name = $request->mother_name;
        $Passport->go_date = $request->go_date;
        $Passport->go_reason = $request->go_reason;
        $Passport->entry_date = $request->entry_date;
        $Passport->nation_religion = $request->nation_religion;
        // $Passport->region_state = $request->region_state;

        $Passport->age = $request->age;
        $Passport->passport_expiry_date = $request->passport_expiry_date;
        $Passport->qualification = $request->qualification;
        $Passport->weight = $request->weight . '(lb)';
        $Passport->height = $request->height . '(cm)';
        $Passport->tatto = $request->tatto;
        $Passport->smoking = $request->smoking;
        $Passport->alcohol = $request->alcohol;
        $Passport->marital_status = $request->marital_status;
        $Passport->prominent_sign = $request->prominent_sign;
        $Passport->working_experience = $request->working_experience;
        $Passport->selected_country = $request->selected_country;
        $Passport->labour_card_no = $request->labour_card_no;
        $Passport->issue_of_labour_date = $request->issue_of_labour_date;

        $Passport->photo = $photo_path ?? '';
        $Passport->nrc_front = $nrc_front_path ?? '';
        $Passport->nrc_back = $nrc_back_path ?? '';

        $Passport->identification_card = $request->identification_card;
        $Passport->issue_date_of_id_card = $request->issue_date_of_id_card;
        $Passport->son = $request->son;
        $Passport->son_age = $request->son_age;
        $Passport->daughter = $request->daughter;
        $Passport->daughter_age = $request->daughter_age;
        $Passport->address_line_one = $request->address_line_one;
        $Passport->phone_family = $request->phone_family;
        $Passport->name_of_heir = $request->name_of_heir;
        $Passport->relative = $request->relative;
        $Passport->nrc_of_heir = $request->nrc_of_heir;
        $Passport->passport_cost = $request->passport_cost;
        $Passport->car_charges = $request->car_charges;
        $Passport->passport_register_status = $request->passport_register_status;
        $Passport->leader = $request->leader;
        $Passport->user_id = auth()->user()->id;

        $Passport->nrc_code = $request->nrcCode ?? $Passport->nrc_code;
        $Passport->nrc_name = $request->nrcName ?? $Passport->nrc_name;
        $Passport->nrc_type = $request->nrcType ?? $Passport->nrc_type;
        $Passport->nrc_number = $request->nrcFieldCode ?? $Passport->nrc_number;
        $Passport->nrc = $request->nrc;

        // $Passport->dob_year = $request->year ?? $Passport->dob_year;
        // $Passport->dob_month = $request->month ?? $Passport->dob_month;
        // $Passport->dob_day = $request->day ?? $Passport->dob_day;
        // $dob = $Passport->dob_year . '.' . $Passport->dob_month . '.' . $Passport->dob_day;

        $Passport->date_of_birth = $request->date_of_birth;

        $Passport->update();
        return redirect()->back()->with('success', 'Updated successfully.');
    }

    public function destroy($id)
    {
        $passport = Passport::findOrFail($id);
        $passport->delete();
        return redirect()->back()->with('success', 'Deleted successfully.');
    }


    public function rejectPassport($id)
    {
        $passport = Passport::findOrFail($id);
        $agent_lists = AgentList::all();
        return view('passport.reject_passport', compact('passport', 'agent_lists'));
    }


    public function rejectPassportList(Request $request)
    {
        $agent_lists = AgentList::all();

        $total_passports = Passport::where('reject_status', 'rejected')
            ->count();
        $passports = Passport::where('reject_status', 'rejected')
            ->paginate(100);

        if (request('search')) {
            $passports = Passport::where(function ($query) {
                $query->where('name', 'Like', '%' . request('search') . '%');
                $query->orWhere('father_name', 'Like', '%' . request('search') . '%');
                $query->orWhere('nrc', 'Like', '%' . request('search') . '%');
                $query->orWhere('date_of_birth', 'Like', '%' . request('search') . '%');
                $query->orWhere('passport', 'Like', '%' . request('search') . '%');
                $query->orWhere('address', 'Like', '%' . request('search') . '%');
                $query->orWhere('remark', 'Like', '%' . request('search') . '%');
                $query->orWhere('phone', 'Like', '%' . request('search') . '%');
            })->paginate(100);
        }

        if (request('agent_list_id')) {
            $passports = Passport::where(function ($query) {
                $query->where('agent_list_id', request('agent_list_id'));
            })->paginate(100);
        }

        if (request('from_date') && request('to_date')) {
            $passports = Passport::whereBetween('join_date', [request('from_date'), request('to_date')])
                ->paginate(100);
        }

        return view('passport.reject_passport_list', compact('agent_lists', 'passports', 'total_passports'));
    }


    public function cancelRejectPassport($id)
    {
        $Passport = Passport::findOrFail($id);
        $Passport->reject_status = NULL;
        $Passport->reject_date = '';
        $Passport->reject_reason = '';
        $Passport->update();
        return redirect()->back()->with('success', 'Updated successfully.');
    }


    public function passportExport()
    {
        $passports = Passport::where('reject_status', NULL)
            ->get();
        return Excel::download(new ExportPassport($passports), 'passport_' . date("Y-m-d H:i:s") . '.xlsx');
    }

    public function passportImport(PassportImportFile $request)
    {
        Excel::import(new PassportImport, request()->file('file'));
        return redirect()->back()->with('success', 'Your processing has been completed.');
    }

    public function findPassportAjax($id)
    {
        $passport = Passport::findOrFail($id);
        return json_encode($passport);
    }

    public function passportEditFormAjax($id)
    {
        $passport = Passport::findOrFail($id);
        $agent_lists = AgentList::all();
        $countries = Country::all();

        return response()->json([
            'html' => view('passport.shared.edit_form', compact('passport', 'agent_lists', 'countries'))
                ->render()
        ]);
    }
}
