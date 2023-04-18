@extends('layouts.main')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12 col-sm-12 col-lg-12">
            <div class="card">

                <div class="card-body">
                    <div class="card-title header-elements">
                        <h5 class="m-0 me-2">
                            Medical Test
                        </h5>
                        <div class="card-title-elements ms-auto">

                            <div class="card-header-elements ms-2">
                                <form action="{{ route('medical_test.index') }}" method="get" autocomplete="off">
                                    <div class="input-group">
                                        <select name="hospital_id" id=""
                                            class="form-control form-control-sm select2">
                                            <option value="0">
                                                --Select Hospitals--
                                            </option>
                                            @foreach ($hospitals as $hospital)
                                                <option value="{{ $hospital->id ?? '' }}">
                                                    {{ $hospital->name ?? '' }}
                                                </option>
                                            @endforeach
                                        </select>
                                        <input type="submit" class="dt-button create-new btn btn-primary" value="Search">
                                    </div>
                                </form>
                            </div>

                            <div class="card-header-elements ms-2">
                                <form action="{{ route('medical_test.index') }}" method="GET" autocomplete="off">
                                    <input type="text" class="form-control" placeholder="Search" name="search">
                                </form>
                            </div>

                            <a href="{{ route('medical_test_export_excel') }}" class="dt-button create-new btn btn-success">
                                <span>
                                    <i class="fa fa-download me-sm-2"></i>
                                    <span class="d-none d-sm-inline-block">
                                        Excel
                                    </span>
                                </span>
                            </a>

                            <a href="{{ route('medical_test.create') }}" class="dt-button create-new btn btn-primary">
                                <span>
                                    <i class="bx bx-plus me-sm-2"></i>
                                    <span class="d-none d-sm-inline-block">Create</span>
                                </span>
                            </a>

                        </div>
                    </div>
                </div>

                <div class="table-responsive text-nowrap">
                    <table class="table table-bordered table-sm" style="margin-bottom: 20px">
                        <thead>
                            <tr class="tbbg">
                                <th class="text-center text-white" style="width: 1%;">#</th>
                                <th class="text-center text-white">MEDICAL TEST DATE</th>
                                <th class="text-center text-white">HOSPITAL</th>
                                <th class="text-center text-white">Agent Name</th>
                                <th class="text-center text-white">Name</th>
                                <th class="text-center text-white">NRC</th>
                                <th class="text-center text-white">Passport</th>
                                <th class="text-center text-white">Covid & Docs</th>
                                <th class="text-center text-white">Fail or Pass</th>
                                <th class="text-center text-white">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            @foreach ($passports as $key => $passport)
                                <tr>
                                    <td class="text-center">
                                        {{ $key + 1 }}
                                    </td>

                                    <td class="text-center">
                                        {{ $passport->medical_test_date ?? '' }}
                                    </td>

                                    <td class="text-center">
                                        {{ $passport->hospital_table->name ?? '' }}
                                    </td>

                                    <td class="text-center">
                                        {{ $passport->passport_table->agent_list_table->name ?? '' }}
                                    </td>

                                    <td class="text-center">
                                        {{ $passport->passport_table->name ?? '' }}
                                    </td>

                                    <td class="text-center">
                                        {{ $passport->passport_table->nrc ?? '' }}
                                    </td>

                                    <td class="text-center">
                                        {{ $passport->passport_table->passport ?? '' }}
                                    </td>

                                    <td class="text-center">
                                        <a href="{{ route('labour_docs_management', $passport->passport_id) }}">
                                            Manage Docs
                                        </a>
                                    </td>

                                    <td class="text-center">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio"
                                                name="pass_failed_{{ $passport->id }}" id="pass_{{ $passport->id }}"
                                                onclick="updatePassFailed(this);" value="Pass"
                                                @if ($passport->failed_or_pass == 'Pass') checked @endif>
                                            <label class="form-check-label" for="pass_{{ $passport->id }}">
                                                Pass
                                            </label>
                                        </div>

                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio"
                                                name="pass_failed_{{ $passport->id }}" id="failed_{{ $passport->id }}"
                                                onclick="updatePassFailed(this);" value="Failed"
                                                @if ($passport->failed_or_pass == 'Failed') checked @endif>
                                            <label class="form-check-label" for="failed_{{ $passport->id }}">
                                                Failed
                                            </label>
                                        </div>
                                    </td>

                                    <td class="text-center">
                                        <form action="{{ route('medical_test.destroy', $passport->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="button" class="btn btn-danger btn-xs del_confirm"
                                                id="confirm-text" data-toggle="tooltip">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $passports->withQueryString()->links() }}
                </div>

            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        // Pass Faile Status 
        function updatePassFailed(data) {
            var value = data.value;
            var id = data.id.split("_")[1];

            var url = '{{ url('update_pass_failed') }}';
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                method: 'GET',
                url: url,
                data: {
                    id: id,
                    value: value,
                },
                success: function(data) {
                    toastr.remove()
                    toastr.success("Your processing has been completed.");
                },
                error: function(data) {
                    console.log(data)
                }
            });
        }
    </script>
@endsection
