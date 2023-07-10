@extends('layouts.based.hr_main')
@section('content')
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-success">
                    <div class="box-header">
                        <h3 class="box-title">
                            Role
                        </h3>

                        <div class="box-tools pull-right">
                            <div class="btn-group">
                                <a type="button" class="btn btn-primary" href="{{ route('role.create') }}">
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
                                        <th class="text-white w-5" style="width: 1%;">#</th>
                                        <th class="text-white w-5" style="width: 10%;">Name</th>
                                        <th class="text-white w-5" style="width: 60%;">Permissions</th>
                                        <th class="text-white w-5" style="width: 5%;">Edit</th>
                                        <th class="text-white w-5" style="width: 5%;">Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($roles as $key => $value)
                                        <tr>

                                            <td style="text-align: center;">
                                                {{ $key + 1 }}
                                            </td>

                                            <td style="text-align: center;">
                                                {{ $value->name }}
                                            </td>

                                            <td style="text-align: center;">
                                                @foreach ($value->permissions as $permission)
                                                    <span class="badge bg-primary">
                                                        {{ $permission->name }}
                                                    </span>
                                                @endforeach
                                            </td>

                                            <td style="text-align: center;">
                                                <a href="{{ route('role.edit', $value->id) }}"
                                                    class="btn btn-sm btn-primary">
                                                    <i class="fa fa-fw fa-pencil"></i>
                                                </a>
                                            </td>

                                            <td style="text-align: center;">
                                                <form action="{{ route('role.destroy', $value->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger del_confirm"
                                                        id="confirm-text" data-toggle="tooltip">
                                                        <i class="fa fa-fw fa-x"></i>
                                                    </button>
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
    </section>
@endsection
