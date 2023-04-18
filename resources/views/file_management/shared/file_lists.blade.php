<div class="col-xl-12 col-lg-12 col-md-12 py-3">
    <div class="table-responsive text-nowrap rowheaders table-scroll" role="region" aria-labelledby="HeadersCol"
        tabindex="0">
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
                            <a href="{{ Storage::url($value->file_path) }}" download="{{ $value->file_name ?? '' }}">
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
                            <form action="{{ route('file_management.destroy', $value->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="button" class="btn btn-danger btn-sm del_confirm" id="confirm-text"
                                    data-toggle="tooltip">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
