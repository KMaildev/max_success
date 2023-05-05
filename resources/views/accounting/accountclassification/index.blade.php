@extends('layouts.based.accounting_main')
@section('content')
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-success">
                    <div class="box-header">
                        <h3 class="box-title">
                            Account Classification
                        </h3>

                        <div class="box-tools pull-right">
                            <div class="btn-group">
                                <a type="button" class="btn btn-primary" href="{{ route('accountclassification.create') }}">
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
                                        <th class="text-white w-5">Account Name</th>
                                        <th class="text-white w-5">Account Code</th>
                                        <th class="text-white w-5">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($account_classifications as $account_classification)
                                        <tr>
                                            <td style="text-align: center;">
                                                {{ ++$i }}
                                            </td>

                                            <td style="text-align: center;">
                                                {{ $account_classification->name }}
                                            </td>

                                            <td style="text-align: center;">
                                                {{ $account_classification->ac_code }}
                                            </td>

                                            <td style="text-align: center;">
                                                <a class="btn btn-sm  btn-primary"
                                                    href="{{ route('accountclassification.edit', $account_classification->id) }}">
                                                    <i class="fa fa-fw fa-pencil"></i>
                                                    Edit
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>

                                <caption class="ms-1">
                                    {!! $account_classifications->links() !!}
                                </caption>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
