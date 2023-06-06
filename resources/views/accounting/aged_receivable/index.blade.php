@extends('layouts.based.accounting_main')
@section('content')
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-success">
                    <div class="box-header">
                        <h3 class="box-title">
                            Aged Receivable
                        </h3>
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

                                </tbody>

                                <caption class="ms-1">
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
