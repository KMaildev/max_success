@extends('layouts.based.accounting_main')
@section('content')
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-success">
                    <div class="box-header">
                        <h3 class="box-title">
                            Chart Of Accounts
                        </h3>

                        <div class="box-tools pull-right">
                            <div class="btn-group">
                                <a type="button" class="btn btn-primary" href="{{ route('subaccount.create') }}">
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
                                    <tr>
                                        <th class="text-white w-5" style="width: 1%;">#</th>
                                        <th class="text-white w-5">Main Account Code</th>
                                        <th class="text-white w-5">Main Account Name</th>
                                        <th class="text-white w-5">Sub Account Code</th>
                                        <th class="text-white w-5">Description</th>
                                        <th class="text-white w-5">Account Type</th>
                                        <th class="text-white w-5">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($chartof_accounts as $key => $chartof_account)
                                        <tr>
                                            <td style="text-align: center;">
                                                {{ $key + 1 }}
                                            </td>

                                            <td style="text-align: center;">
                                                {{ $chartof_account->chartof_account_table->coa_number ?? '' }}
                                            </td>

                                            <td style="text-align: center;">
                                                {{ $chartof_account->chartof_account_table->description ?? '' }}
                                            </td>

                                            <td style="text-align: center;">
                                                {{ $chartof_account->coa_number }}
                                            </td>

                                            <td style="text-align: center;">
                                                {{ $chartof_account->description }}
                                            </td>

                                            <td style="text-align: center;">
                                                {{ $chartof_account->account_classifications_table->name ?? '' }}
                                            </td>

                                            <td style="text-align: center;">
                                                <a class="btn btn-sm  btn-primary"
                                                    href="{{ route('subaccount.edit', $chartof_account->id) }}">
                                                    <i class="fa fa-fw fa-pencil"></i>
                                                    Edit
                                                </a>
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
    </section>
@endsection
@section('script')
@endsection
