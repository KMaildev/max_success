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
                                        <th class="text-white w-5">Account Name</th>
                                        <th class="text-white w-5">Account Code</th>
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
                                                <div class="btn-group">
                                                    <button class="btn btn-info btn-xs dropdown-toggle" type="button"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        Action
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li>
                                                            <a class="dropdown-item"
                                                                href="{{ route('accounttype.edit', $account_type->id) }}">Edit</a>
                                                        </li>
                                                        <li>
                                                            <form
                                                                action="{{ route('accounttype.destroy', $account_type->id) }}"
                                                                method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="button" class="dropdown-item del_confirm"
                                                                    id="confirm-text" data-toggle="tooltip">Delete</button>
                                                            </form>
                                                        </li>
                                                    </ul>
                                                </div>
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
