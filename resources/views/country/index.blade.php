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
                                        <th class="text-center text-white w-5" style="width: 10%;">Photo</th>
                                        <th class="text-center text-white w-5" style="width: 5%;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($countryies as $key => $country)
                                        <tr>
                                            <td class="text-center" data-title="No">
                                                {{ $key + 1 }}
                                            </td>

                                            <td class="text-center" data-title="Country">
                                                {{ $country->title ?? '' }}
                                            </td>

                                            <td class="text-center" data-title="Photo">
                                                @if ($country->image)
                                                    <img src="{{ Storage::url($country->image) }}" alt=""
                                                        style="width: 30px; height: 30px; background-position: center; background-size: contain, cover;">
                                                @endif
                                            </td>

                                            <td class="text-center" data-title="Edit">
                                                <button type="button" class="btn btn-sm btn-block btn-primary"
                                                    data-toggle="modal" data-target="#editModal_{{ $country->id }}">
                                                    <i class="fa fa-fw fa-pencil"></i>
                                                </button>
                                            </td>
                                            @include('country.edit')
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection

@section('script')
@endsection
