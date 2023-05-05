<ul class="list-group">
    <li class="list-group-item d-flex justify-content-between align-items-center">
        Company Name
        <span class="badge bg-primary badge-pill">
            {{ $sending->demands_table->overseas_agencies_table->company_name ?? '' }}
        </span>
    </li>
    <li class="list-group-item d-flex justify-content-between align-items-center">
        Sending Date
        <span class="badge bg-primary badge-pill">
            {{ $sending->sending_date ?? '' }}
        </span>
    </li>
    <li class="list-group-item d-flex justify-content-between align-items-center">
        Sending Male
        <span class="badge bg-primary badge-pill">
            {{ number_format($sending->sending_male) }}
        </span>
    </li>
    <li class="list-group-item d-flex justify-content-between align-items-center">
        Sending Female
        <span class="badge bg-primary badge-pill">
            {{ number_format($sending->sending_female) }}
        </span>
    </li>
    <li class="list-group-item d-flex justify-content-between align-items-center">
        Sending Total
        <span class="badge bg-primary badge-pill">
            {{ number_format($sending->sending_male + $sending->sending_female) }}
        </span>
    </li>
</ul>
