<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCountry;
use App\Http\Requests\UpdateCountry;
use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $search = request('search');
        $countryies = Country::query()
            ->where('title', 'LIKE', "%{$search}%")
            ->get();
        return view('country.index', compact('countryies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('country.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCountry $request)
    {
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $path = $image->store('public/images');
        }

        $country = new Country();
        $country->title = $request->country_name;
        $country->currency_format = $request->currency_format;

        $country->standard_cost = $request->standard_cost;
        $country->standard_cost_mmk = $request->standard_cost_mmk;
        $country->exchange_rate = $request->exchange_rate;
        $country->total_amount_mmk = $request->total_amount_mmk;

        $country->image = $path ?? '';
        $country->save();
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
        $country = Country::findOrFail($id);
        return response()->json([
            'html' => view('country.edit_form', compact('country'))
                ->render()
        ]);

        // $country = Country::findOrFail($id);
        // return view('country.edit', compact('country'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCountry $request, $id)
    {
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $path = $image->store('public/images');
        }

        $country = Country::findOrFail($id);
        $country->title = $request->country_name;
        $country->currency_format = $request->currency_format;
        $country->image = $path ?? $country->image;

        $country->standard_cost = $request->standard_cost;
        $country->standard_cost_mmk = $request->standard_cost_mmk;
        $country->exchange_rate = $request->exchange_rate;
        $country->total_amount_mmk = $request->total_amount_mmk;

        $country->update();
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
        $country = Country::findOrFail($id);
        $country->delete();
        return redirect()->back()->with('success', 'Process is completed.');
    }

    public function findByCountryId($id)
    {
        $country = Country::findOrFail($id);
        return json_encode($country);
    }


    public function countryEditFormAjax($id)
    {
        $country = Country::findOrFail($id);
        return response()->json([
            'html' => view('passport.shared.edit_form', compact('country'))
                ->render()
        ]);
    }
}
