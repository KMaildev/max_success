    <div class="table-responsive text-nowrap">
        <table class="table table-bordered main-table">
            <thead class="tbbg">
                <tr class="bg-gray">
                    <th class="text-white w-5" style="width: 1%;">
                        #
                    </th>
                    <th class="text-white w-5">File Name</th>
                    <th class="text-white w-5">Download</th>
                    <th class="text-white w-5">Upload By</th>
                    <th class="text-white w-5">Upload Date</th>
                    <th class="text-white w-5">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($file_managements as $key => $value)
                    <tr>
                        <td class="text-white w-5">
                            {{ $key + 1 }}
                        </td>

                        <td class="text-white w-5">
                            <strong>{{ $value->file_name ?? '' }}</strong>
                        </td>

                        <td class="text-white w-5">
                            <a href="{{ Storage::url($value->file_path) }}" download="{{ $value->file_name ?? '' }}">
                                <i class="fa fa-download fa-lg text-danger"></i>
                                <strong>Download</strong>
                            </a>
                        </td>

                        <td class="text-white w-5">
                            <i class="fa fa-user fa-lg text-success"></i>
                            <strong>{{ $value->users_table->name ?? '' }}</strong>
                        </td>

                        <td class="text-white w-5">
                            <strong>{{ $value->upload_date ?? '' }}</strong>
                        </td>

                        <td class="text-white w-5">
                            <form action="{{ route('file_management.destroy', $value->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm del_confirm" id="confirm-text"
                                    data-toggle="tooltip">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
