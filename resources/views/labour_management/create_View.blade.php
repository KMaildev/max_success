@extends('layouts.main')
@section('content')
    <div class="row">
        @include('components.contact_information')
        <div class="col-md-12 py-3">
            <div class="card mb-3">
                <div class="card-header border-bottom">
                    <ul class="nav nav-tabs card-header-tabs" id="nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a href="{{ route('labour_create_view', $contract->id) }}" class="nav-link active"
                                aria-selected="true">
                                Add Contract Labour
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('view_contract_labour', $contract->id) }}" class="nav-link"
                                aria-selected="true">
                                View Contract Labour
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade active show" id="ProcessingFile" role="tabpanel"
                        aria-labelledby="ProcessingFile-tab">
                        <div class="col-md-12 col-lg-12 col-xl-12 mb-6 order-0">
                            <h4>Interview Labour</h4>
                            <form action="">
                                <table id="interview_labour" class="display" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th class="text-center text-white" style="background-color: #296166;">
                                            </th>
                                            <th class="text-center text-white" style="background-color: #296166;">
                                                Interview
                                            </th>
                                            <th class="text-center text-white" style="background-color: #296166;">
                                                Interview Date
                                            </th>
                                            <th class="text-center text-white" style="background-color: #296166;">
                                                Name
                                            </th>
                                            <th class="text-center text-white" style="background-color: #296166;">
                                                M/F
                                            </th>
                                            <th class="text-center text-white" style="background-color: #296166;">
                                                NRC
                                            </th>
                                            <th class="text-center text-white" style="background-color: #296166;">
                                                Passport
                                            </th>
                                            <th class="text-center text-white" style="background-color: #296166;">
                                                Phone
                                            </th>
                                            <th class="text-center text-white" style="background-color: #296166;">
                                                Agent
                                            </th>
                                            <th class="text-center text-white" style="background-color: #296166;">
                                                Contract Status
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($interview_labours as $key => $interview_labour)
                                            <tr class="tableCheck">
                                                <td>
                                                    <input type="hidden" name="passport_id[]"
                                                        value="{{ $interview_labour->passport_table->id ?? '' }}">
                                                    {{ $key + 1 }}
                                                </td>

                                                <td class="text-center">
                                                    {{ $interview_labour->interviews_table->interview_title ?? '' }}
                                                </td>

                                                <td class="text-center">
                                                    {{ $interview_labour->interviews_table->interview_date ?? '' }}
                                                </td>

                                                <td class="text-center">
                                                    {{ $interview_labour->passport_table->name ?? '' }}
                                                </td>

                                                <td class="text-center">
                                                    {{ ucfirst($interview_labour->passport_table->gender ?? '') }}
                                                </td>

                                                <td class="text-center">
                                                    {{ $interview_labour->passport_table->nrc ?? '' }}
                                                </td>

                                                <td class="text-center">
                                                    {{ $interview_labour->passport_table->passport ?? '' }}
                                                </td>

                                                <td class="text-center">
                                                    {{ $interview_labour->passport_table->phone ?? '' }}
                                                </td>

                                                <td class="text-center">
                                                    {{ $interview_labour->passport_table->agent_list_table->name ?? $interview_labour->passport_table->local_agent_name }}
                                                </td>

                                                <td class="text-center">
                                                    @if ($interview_labour->labour_management_table->id ?? '')
                                                        <span class="badge bg-primary">
                                                            Contract
                                                        </span>
                                                    @else
                                                        <span class="badge bg-danger">
                                                            Pending
                                                        </span>
                                                    @endif
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                                <button id="submitToContract" type="submit" class="btn btn-primary">
                                    <span class="fa fa-arrow-right"></span>&nbsp;
                                    Submit to Contract List
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $(document).ready(function() {
            // var events = $('#events');
            // var table = $('#interview_labour').DataTable({
            //     select: true
            // });
        });

        $(document).ready(function() {
            var table = $('#interview_labour').DataTable();

            $('#interview_labour tbody').on('click', 'tr', function() {
                $(this).toggleClass('selected');
            });

            $('#submitToContract').click(function(e) {
                e.preventDefault();
                var selectedRowInputs = $('.selected input');
                var contract_id = '{{ $contract->id }}';
                var passports = selectedRowInputs.serialize();
                if (passports === '' || passports == null || contract_id === '' || contract_id == null) {
                    return false;
                }
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    type: "POST",
                    dataType: "json",
                    url: `/sbumit_to_contract?contract_id=${contract_id}`,
                    data: passports,
                    success: function(data) {
                        toastr.remove();
                        toastr.success("Your processing has been completed.");
                    },
                });
            });
        });
    </script>
@endsection
