@extends('layouts.based.hr_main')
@section('content')
    <section class="content-header">
        <h1>
            Role
        </h1>
        <ol class="breadcrumb">
            <li>
                <a href="{{ route('home') }}">
                    <i class="fa fa-dashboard"></i>
                    Dashboard
                </a>
            </li>
            <li class="active">
                Permission
            </li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-success">
                    <div class="box-body">
                        <div class="col-md-12">
                            <form action="{{ route('role.update', $role->id) }}" method="POST" autocomplete="off"
                                id="edit-form" role="form">
                                @csrf
                                @method('PUT')

                                <div class="form-group" style="padding: 17px;">
                                    <label for="html5-text-input" class="col-md-3 col-form-label">Name</label>
                                    <div class="col-md-9">
                                        <input class="form-control @error('name') is-invalid @enderror" type="text"
                                            name="name" value="{{ $role->name }}" />
                                        @error('name')
                                            <div class="invalid-feedback"> {{ $message }} </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group" style="padding: 17px;">
                                        <small class="text-black fw-semibold d-block" style="font-size: 20px;">
                                            Permission -> Moudle <br>
                                        </small>
                                        @foreach ($permissions as $permission)
                                            @if ($permission->status == 'module')
                                                <div class="col-md-4 col-3">
                                                    <div class="form-check form-check-primary mt-3">
                                                        <input class="form-check-input" type="checkbox"
                                                            value="{{ $permission->name }}"
                                                            id="checkbox_{{ $permission->id }}" name="permissions[]"
                                                            @if (in_array($permission->id, $old_permissions)) checked @endif />
                                                        <label class="form-check-label"
                                                            for="checkbox_{{ $permission->id }}">{{ $permission->name }}</label>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                    <hr>

                                    <div class="col-md-9">
                                        <div class="form-group">
                                            <small class="text-black fw-semibold d-block" style="font-size: 20px;">
                                                Permission -> Function <br>
                                            </small>
                                            @foreach ($permissions as $permission)
                                                @if ($permission->status == 'function')
                                                    <div class="col-md-4 col-3">
                                                        <div class="form-check form-check-primary mt-3">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="{{ $permission->name }}"
                                                                id="checkbox_{{ $permission->id }}" name="permissions[]"
                                                                @if (in_array($permission->id, $old_permissions)) checked @endif />
                                                            <label class="form-check-label"
                                                                for="checkbox_{{ $permission->id }}">{{ $permission->name }}</label>
                                                        </div>
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group" style="padding: 17px;">
                                    <div class="col-md-4">
                                        <button class="btn btn-info btn-block" id="create-product-submit" type="submit"
                                            name="create-product-submit">
                                            <span class="fa fa-fw fa-save"></span>
                                            Save
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('script')
    {!! JsValidator::formRequest('App\Http\Requests\UpdateRole', '#edit-form') !!}
@endsection
