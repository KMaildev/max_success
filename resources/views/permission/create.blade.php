@extends('layouts.based.hr_main')
@section('content')
    <section class="content-header">
        <h1>
            Permission
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
                        <div class="col-md-8">
                            <form action="{{ route('permission.store') }}" method="POST" autocomplete="off"
                                id="create-form" role="form">
                                @csrf

                                <div class="form-group" style="padding: 17px;">
                                    <label for="html5-text-input" class="col-md-3 col-form-label">
                                        Status
                                    </label>
                                    <div class="col-md-9">
                                        <select name="status" id="" class="form-control" required>
                                            <option value="module">
                                                Module
                                            </option>
                                            <option value="function">
                                                Function
                                            </option>
                                        </select>
                                        @error('status')
                                            <div class="invalid-feedback"> {{ $message }} </div>
                                        @enderror
                                    </div>
                                </div>


                                <div class="form-group" style="padding: 17px;">
                                    <label for="html5-text-input" class="col-md-3 col-form-label">Name</label>
                                    <div class="col-md-9">
                                        <input class="form-control @error('name') is-invalid @enderror" type="text"
                                            name="name" value="{{ old('name') }}" />
                                        @error('name')
                                            <div class="invalid-feedback"> {{ $message }} </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group" style="padding: 17px;">
                                    <label for="html5-search-input" class="col-md-3 col-form-label"></label>
                                    <div class="col-md-9">
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
    {!! JsValidator::formRequest('App\Http\Requests\StorePermission', '#create-form') !!}
@endsection
