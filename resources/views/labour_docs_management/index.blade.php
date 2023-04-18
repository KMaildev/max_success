@extends('layouts.main')
@section('content')
    <div class="row justify-content-center">
        <div class="col-xl-12 col-lg-12 col-md-12">
            <div class="card mb-4">
                <div class="card-body">
                    <h4>
                        Files
                    </h4>
                    <form action="{{ route('labour_docs.store') }}" method="POST" autocomplete="off" id="create-form"
                        role="form" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="passport_id" value="{{ $passport->id }}">
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



                    <div class="col-xl-12 col-lg-12 col-md-12 py-3">
                        <div class="table-responsive text-nowrap rowheaders table-scroll" role="region"
                            aria-labelledby="HeadersCol" tabindex="0">
                            <table class="table table-bordered main-table">
                                <thead class="tbbg">
                                    <tr>
                                        <th class="text-center text-white" style="width: 1%;">#</th>
                                        <th class="text-center text-white">File Name</th>
                                        <th class="text-center text-white">Download</th>
                                        <th class="text-center text-white">Upload By</th>
                                        <th class="text-center text-white">Upload Date</th>
                                        <th class="text-center text-white" style="width: 1%;">Action</th>
                                    </tr>
                                </thead>
                                <tbody class="table-border-bottom-0">
                                    @foreach ($file_managements as $key => $value)
                                        <tr>
                                            <td>
                                                {{ $key + 1 }}
                                            </td>

                                            <td>
                                                <strong>{{ $value->file_name ?? '' }}</strong>
                                            </td>

                                            <td>
                                                <a href="{{ Storage::url($value->file_path) }}"
                                                    download="{{ $value->file_name ?? '' }}">
                                                    <i class="fa fa-download fa-lg text-danger"></i>
                                                    <strong>Download</strong>
                                                </a>
                                            </td>

                                            <td>
                                                <i class="fa fa-user fa-lg text-success"></i>
                                                <strong>{{ $value->users_table->name ?? '' }}</strong>
                                            </td>

                                            <td>
                                                <strong>{{ $value->upload_date ?? '' }}</strong>
                                            </td>

                                            <td>
                                                <form action="{{ route('labour_docs.destroy', $value->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="button" class="btn btn-danger btn-sm del_confirm"
                                                        id="confirm-text" data-toggle="tooltip">Delete</button>
                                                </form>
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
    </div>
@endsection
