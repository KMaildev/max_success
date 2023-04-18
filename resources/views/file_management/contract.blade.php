@extends('layouts.main')
@section('content')
    <div class="row justify-content-center">
        <div class="col-xl-12 col-lg-12 col-md-12">
            <div class="card mb-4">
                <div class="card-body">
                    <h4>
                        Files
                    </h4>
                    <h6>
                        {{ $contract->demands_table->overseas_agencies_table->company_name ?? '' }}
                    </h6>
                    <form action="{{ route('file_management.store') }}" method="POST" autocomplete="off" id="create-form"
                        role="form" enctype="multipart/form-data">
                        @csrf

                        <input type="hidden" name="contract_id" value="{{ $contract->id }}">

                        <input type="hidden" name="overseas_agencie_id"
                            value="{{ $contract->demands_table->overseas_agencies_table->id ?? '' }}">
                        <div class="input-group">
                            <input class="form-control @error('files') is-invalid @enderror" type="file" name="files[]"
                                multiple value="{{ old('files') }}" required />
                            @error('files')
                                <div class="invalid-feedback"> {{ $message }} </div>
                            @enderror
                            <button class="btn btn-outline-primary" type="submit"
                                id="inputGroupFileAddon04">Upload</button>
                        </div>
                    </form>

                    @include('file_management.shared.file_lists')
                </div>
            </div>
        </div>
    </div>
@endsection
