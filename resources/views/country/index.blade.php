@extends('layouts.main')
@section('content')
    <section class="content-header">
        <h1>
            Country
        </h1>
        <ol class="breadcrumb">
            <li>
                <a href="{{ route('home') }}">
                    <i class="fa fa-dashboard"></i>
                    Dashboard
                </a>
            </li>
            <li class="active">
                Country
            </li>
        </ol>
    </section>

    <section class="content">
        <div class="box box-info collapsed-box">
            <div class="box-header with-border">
                <h3 class="box-title">
                    <span class="fa fa-fw fa-plus"></span>
                    Add New Country
                </h3>
                <button type="button" class="btn btn-box-tool add-new-btn" data-widget="collapse" data-collapse="true">
                    <i class="fa fa-plus"></i>
                </button>
            </div>
            @include('country.create')
        </div>

        <div class="row">
            <div class="col-xs-12">
                <div class="box box-success">
                    <div class="box-header">
                        <h3 class="box-title">
                            Country List
                        </h3>
                    </div>
                    <div class="box-body">
                        <div class="table-responsive">
                            <table id="datatable" class="table table-bordered table-striped table-hover"
                                data-hide-colums="">
                                <thead>
                                    <tr class="bg-gray">
                                        <th class="text-center text-white w-5" style="width: 1%;">#</th>
                                        <th class="text-center text-white w-5" style="width: 10%;">Country</th>
                                        <th class="text-center text-white w-5" style="width: 10%;">Currency</th>
                                        <th class="text-center text-white w-5" style="width: 10%;">GOV Standard Cost</th>
                                        <th class="text-center text-white w-5" style="width: 10%;">Exchange Rate</th>
                                        <th class="text-center text-white w-5" style="width: 10%;">MMK Amount</th>
                                        <th class="text-center text-white w-5" style="width: 5%;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($countryies as $key => $country)
                                        <tr>
                                            <td class="text-center" data-title="No">
                                                {{ $key + 1 }}
                                            </td>

                                            <td data-title="Country">
                                                @if ($country->image)
                                                    <img src="{{ Storage::url($country->image) }}" alt=""
                                                        style="width: 30px; height: 30px; background-position: center; background-size: contain, cover;">
                                                @endif
                                                {{ $country->title ?? '' }}
                                            </td>


                                            <td class="text-center" data-title="Currency">
                                                {{ $country->currency_format ?? '' }}
                                            </td>

                                            <td class="text-center" data-title="GOV Standard Cost">
                                                {{ number_format($country->standard_cost, 2) }}
                                            </td>

                                            <td class="text-center" data-title="Exchange Rate">
                                                {{ number_format($country->exchange_rate, 2) }}
                                            </td>

                                            <td class="text-center" data-title="Amount MMK">
                                                {{ number_format($country->total_amount_mmk, 2) }}
                                            </td>

                                            <td class="text-center" data-title="Edit">
                                                <button type="button" class="btn btn-sm btn-block btn-primary"
                                                    onclick="editCountry({{ $country->id }})">
                                                    <i class="fa fa-fw fa-pencil"></i>
                                                </button>
                                            </td>

                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @include('country.edit')

    </section>
@endsection


<script>
    function editCountry(country_id) {
        $.ajax({
            url: `country_edit/${country_id}`,
            method: 'GET',
            success: function(result) {
                $('#editCountryModel').modal('show');
                $('#showEditForm').html(result.html);
            }
        });
    }
</script>
