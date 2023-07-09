@extends('layouts.based.accounting_main')
@section('content')
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-success">
                    <div class="box-header">
                        <h3 class="box-title">
                            Taxes
                        </h3>

                        <div class="box-tools pull-right">
                            <div class="btn-group">
                                <a type="button" class="btn btn-primary" href="{{ route('taxes.create') }}">
                                    <span class="fa fa-add"></span>
                                    Create
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="box-body">
                        <div class="table-responsive text-nowrap">
                            <table class="table table-bordered table-sm">
                                <thead class="tbbg">
                                    <tr class="bg-gray">
                                        <th class="text-white w-5" style="width: 1%;">
                                            #
                                        </th>
                                        <th class="text-white w-5">
                                            Tax Name
                                        </th>
                                        <th class="text-white w-5">
                                            Description
                                        </th>
                                        <th class="text-white w-5">
                                            Tax Type
                                        </th>
                                        <th class="text-white w-5">
                                            Amount
                                        </th>
                                        <th class="text-white w-5">
                                            Status
                                        </th>
                                        <th class="text-white w-5">
                                            Action
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($taxes as $key => $taxe)
                                        <tr>
                                            <td>
                                                {{ $key + 1 }}
                                            </td>

                                            <td style="text-align: center">
                                                {{ $taxe->tax_name ?? '' }}
                                            </td>

                                            <td style="text-align: center">
                                                {{ $taxe->description ?? '' }}
                                            </td>

                                            <td style="text-align: center">
                                                {{ ucfirst($taxe->tax_type ?? '') }}
                                            </td>

                                            <td style="text-align: center">
                                                {{ $taxe->amount ?? '' }}
                                                @if ($taxe->tax_computation == 'percent')
                                                    %
                                                @endif
                                            </td>

                                            <td style="text-align: center">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox" role="switch"
                                                        id="flexSwitchCheckChecked_{{ $taxe->id }}"
                                                        @if ($taxe->status == 'Active') checked @endif
                                                        onchange="handleChange({{ $taxe->id }})">

                                                    <label class="form-check-label"
                                                        for="flexSwitchCheckChecked_{{ $taxe->id }}">
                                                        {{ $taxe->status ?? '' }}
                                                    </label>
                                                </div>
                                            </td>

                                            <td>
                                                <a href="{{ route('taxes.edit', $taxe->id) }}"
                                                    class="btn btn-sm btn-block btn-primary">
                                                    <i class="fa fa-fw fa-pencil"></i>
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
    <script>
        function handleChange(id) {
            var url = '/taxes_change_status/' + id;
            location.href = url;
            // location.reload();
        }
    </script>
@endsection
