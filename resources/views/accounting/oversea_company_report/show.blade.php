@extends('layouts.based.accounting_main')
@section('content')
    <style>
        .dataTables_filter {
            display: none;
        }

        tfoot {
            display: table-header-group !important;
        }
    </style>

    <section class="content-header">
        <h1>
            Demand Payment
        </h1>
        <ol class="breadcrumb">
            <li>
                <a href="{{ route('home') }}">
                    <i class="fa fa-dashboard"></i>
                    Dashboard
                </a>
            </li>
            <li class="active">
                Demand Payment
            </li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            
        </div>
    </section>
@endsection
@section('script')
    
@endsection
