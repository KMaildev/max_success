<form action="{{ route('attendance.index') }}" method="get" autocomplete="off">

    <div class="row mb-3">
        <div class="col-md-3">
            <input type="text" class="form-control" placeholder="Employee Name" name="employee_name"
                value="{{ old('employee_name') }}">
        </div>

        <div class="col-md-3">
            <input type="date" class="form-control" name="start_date">
        </div>

        <div class="col-md-3">
            <input type="date" class="form-control" name="end_date">
        </div>

        <div class="col-md-3">
            <button type="submit" class="btn btn-primary btn-lg">
                <i class="fas fa-search"></i>
                Search
            </button>
        </div>
    </div>
</form>
