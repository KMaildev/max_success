@extends('layouts.based.accounting_main')
@section('content')
    <section class="content-header">
        <h1>
            Labour Payment
        </h1>
        <ol class="breadcrumb">
            <li>
                <a href="{{ route('home') }}">
                    <i class="fa fa-dashboard"></i>
                    Dashboard
                </a>
            </li>
            <li class="active">
                Labour Payment
            </li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-success">

                    <div class="box-header">
                        <h3 class="box-title">
                            Labour Payment
                        </h3>

                        <div class="box-tools pull-right">
                            <div class="btn-group">
                                <a type="button" class="btn btn-primary"
                                    href="{{ route('labour_payment.create') }}">
                                    <span class="fa fa-add"></span>
                                    Add New Payment
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="box-body">
                        <div class="table-responsive">
                            <table id="datatable" class="table table-bordered table-striped table-hover"
                                data-hide-colums="">
                                <thead>
                                    <tr>
                                        <th class="text-center text-white w-5" style="width: 1%;">
                                            #
                                        </th>

                                        <th class="text-center text-white w-5" style="width: 10%;">
                                            Name
                                        </th>

                                        <th class="text-center text-white w-5" style="width: 10%;">
                                            NRC
                                        </th>

                                        <th class="text-center text-white w-5" style="width: 10%;">
                                            Passport
                                        </th>

                                        <th class="text-center text-white w-5" style="width: 10%;">
                                            Gender
                                        </th>

                                        <th class="text-center text-white w-5" style="width: 10%;">
                                            Total Amount
                                        </th>
                                      
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
