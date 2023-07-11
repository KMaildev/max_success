<form action="{{ route('attendance.index') }}" method="get" autocomplete="off">

    <div class="row mb-3">
        <div class="col-md-3">
            <input type="text" class="form-control employee_name" placeholder="Employee Name" name="employee_name"
                value="{{ old('employee_name') }}">
        </div>

        <div class="col-md-3">
            <div class="form-group">
                <select name="month" class="form-control select-month">
                    <option value="">-- Please Choose (Month) --</option>
                    <option value="01" @if (now()->format('m') == '01') selected @endif>
                        Jan
                    </option>
                    <option value="02" @if (now()->format('m') == '02') selected @endif>
                        Feb
                    </option>
                    <option value="03" @if (now()->format('m') == '03') selected @endif>
                        Mar
                    </option>
                    <option value="04" @if (now()->format('m') == '04') selected @endif>
                        Apr
                    </option>
                    <option value="05" @if (now()->format('m') == '05') selected @endif>
                        May
                    </option>
                    <option value="06" @if (now()->format('m') == '06') selected @endif>
                        Jun
                    </option>
                    <option value="07" @if (now()->format('m') == '07') selected @endif>
                        Jul
                    </option>
                    <option value="08" @if (now()->format('m') == '08') selected @endif>
                        Aug
                    </option>
                    <option value="09" @if (now()->format('m') == '09') selected @endif>
                        Sep
                    </option>
                    <option value="10" @if (now()->format('m') == '10') selected @endif>
                        Oct
                    </option>
                    <option value="11" @if (now()->format('m') == '11') selected @endif>
                        Nov
                    </option>
                    <option value="12" @if (now()->format('m') == '12') selected @endif>
                        Dec
                    </option>
                </select>
            </div>
        </div>

        <div class="col-md-3">
            <div class="form-group">
                <select name="year" class="form-control select-year">
                    <option value="">-- Please Choose (Year) --</option>
                    @for ($i = 0; $i < 10; $i++)
                        <option value="{{ now()->subYears($i)->format('Y') }}"
                            @if (now()->format('Y') ==
                                    now()->subYears($i)->format('Y')) selected @endif>
                            {{ now()->subYears($i)->format('Y') }}
                        </option>
                    @endfor
                </select>
            </div>
        </div>

        <div class="col-md-3">
            <button type="submit" class="btn btn-primary btn-lg">
                <i class="fas fa-search"></i>
                Search
            </button>
        </div>
    </div>
</form>
