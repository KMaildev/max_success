@extends('layouts.based.accounting_main')
@section('content')
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-success">
                    <div class="box-header">
                        <h3 class="box-title">
                            Account Type
                        </h3>

                        <div class="box-tools pull-right">
                            <div class="btn-group">
                                <a type="button" class="btn btn-primary" href="{{ route('accounttype.create') }}">
                                    <span class="fa fa-add"></span>
                                    Add New Account
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="box-body">
                        <div class="table-responsive text-nowrap">
                            <table class="table table-bordered table-sm">
                                <thead class="tbbg">
                                    <tr class="bg-gray">
                                        <th class="text-white w-5" style="width: 1%;">#</th>
                                        <th class="text-white w-5">Number</th>
                                        <th class="text-white w-5">Description</th>
                                        <th class="text-white w-5">Account Type</th>
                                        <th class="text-white w-5">Financial Statement</th>
                                        <th class="text-white w-5">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($account_types as $account_type)
                                        <tr>
                                            <td style="text-align: center;">
                                                {{ ++$i }}
                                            </td>

                                            <td style="text-align: center;">
                                                {{ $account_type->number }}
                                            </td>

                                            <td style="text-align: center;">
                                                {{ $account_type->description }}
                                            </td>

                                            <td style="text-align: center;">
                                                {{ $account_type->account_classifications->name ?? '' }}
                                            </td>

                                            <td style="text-align: center;">
                                                {{ $account_type->financial_statement }}
                                            </td>

                                            <td style="text-align: center;">
                                                <a class="btn btn-sm  btn-primary"
                                                    href="{{ route('accounttype.edit', $account_type->id) }}">
                                                    <i class="fa fa-fw fa-pencil"></i>
                                                    Edit
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>

                                <caption class="ms-1">
                                    {!! $account_types->links() !!}
                                </caption>
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
