<form class="form-horizontal" action="{{ route('passport_import') }}" method="POST" autocomplete="off" id="create-form"
    role="form" enctype="multipart/form-data">
    @csrf

    <div class="form-group">
        <label for="html5-text-input" class="col-md-3 control-label">
            Import Excel
        </label>
        <div class="col-md-8">
            <input class="form-control @error('file') is-invalid @enderror" type="file" name="file"
                value="{{ old('file') }}" required/>
            @error('file')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
            <a href="{{ asset('data/passport_import.xlsx') }}">
                Simple
            </a>
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-3 control-label"></label>
        <div class="col-sm-2">
            <button class="btn btn-info btn-block" id="create-product-submit" type="submit"
                name="create-product-submit">
                <span class="fa fa-fw fa-save"></span>
                Save
            </button>
        </div>
    </div>
</form>
