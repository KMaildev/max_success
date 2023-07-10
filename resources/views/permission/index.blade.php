@extends('layouts.based.hr_main')
@section('content')
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-success">
                    <div class="box-header">
                        <h3 class="box-title">
                            Permission
                        </h3>

                        <div class="box-tools pull-right">
                            <div class="btn-group">
                                <a type="button" class="btn btn-primary" href="{{ route('permission.create') }}">
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
                                        <th class="text-white w-5">Name</th>
                                        <th class="text-white w-5">Status</th>
                                        <th class="text-white w-5" style="width: 5%;">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($permission as $key => $value)
                                        <tr>
                                            <td style="text-align: center;">
                                                {{ $key + 1 }}
                                            </td>

                                            <td style="text-align: center;">
                                                {{ $value->name }}
                                            </td>

                                            <td class="text-center">
                                                {{ $value->status ?? '' }}
                                            </td>

                                            <td style="text-align: center;">
                                                <a href="{{ route('permission.edit', $value->id) }}"
                                                    class="btn btn-sm btn-primary">
                                                    <i class="fa fa-fw fa-pencil"></i>
                                                </a>

                                                <form action="{{ route('permission.destroy', $value->id) }}" method="POST" hidden>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger ">
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
