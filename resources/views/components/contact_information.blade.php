<ul class="list-group">
    <li class="list-group-item d-flex justify-content-between align-items-center">
        Company Name
        <span class="badge bg-primary badge-pill">
            {{ $contract->demands_table->overseas_agencies_table->company_name ?? '' }}
        </span>
    </li>
    <li class="list-group-item d-flex justify-content-between align-items-center">
        Contract Date
        <span class="badge bg-primary badge-pill">
            {{ $contract->contract_date ?? '' }}
        </span>
    </li>
    <li class="list-group-item d-flex justify-content-between align-items-center">
        Contract Male
        <span class="badge bg-primary badge-pill">
            {{ number_format($contract->contract_male) }}
        </span>
    </li>
    <li class="list-group-item d-flex justify-content-between align-items-center">
        Contract Female
        <span class="badge bg-primary badge-pill">
            {{ number_format($contract->contract_female) }}
        </span>
    </li>
    <li class="list-group-item d-flex justify-content-between align-items-center">
        Contract Total
        <span class="badge bg-primary badge-pill">
            {{ number_format($contract->contract_male + $contract->contract_female) }}
        </span>
    </li>
</ul>
