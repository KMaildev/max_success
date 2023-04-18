<div class="col-md-12 col-lg-12 col-xl-12 mb-6 order-0">
    <div class="card">
        <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="card-title mb-0">Contract Information</h5>
        </div>
        <div class="card-body pb-3">
            <ul class="p-0 m-0">

                <li class="d-flex mb-3">
                    <div class="avatar avatar-sm flex-shrink-0 me-3">
                        <span class="avatar-initial rounded-circle bg-label-primary"><i class="bx bx-user"></i></span>
                    </div>
                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                        <div class="me-2">
                            <p class="mb-0 lh-1">Company Name</p>
                            <small class="text-muted">
                                {{ $contract->demands_table->overseas_agencies_table->company_name ?? '' }}
                            </small>
                        </div>
                    </div>
                </li>

                <li class="d-flex mb-3">
                    <div class="avatar avatar-sm flex-shrink-0 me-3">
                        <span class="avatar-initial rounded-circle bg-label-danger">
                            <i class="bx bx-calendar"></i>
                        </span>
                    </div>
                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                        <div class="me-2">
                            <p class="mb-0 lh-1">Contract Date</p>
                            <small class="text-muted">
                                {{ $contract->contract_date ?? '' }}
                            </small>
                        </div>
                    </div>
                </li>


                <li class="d-flex mb-3">
                    <div class="avatar avatar-sm flex-shrink-0 me-3">
                        <span class="avatar-initial rounded-circle bg-label-danger"><i
                                class="bx bx-mail-send"></i></span>
                    </div>
                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                        <div class="me-2">
                            <p class="mb-0 lh-1">Contract Male</p>
                            <small class="text-muted">
                                {{ number_format($contract->contract_male) }}
                            </small>
                        </div>
                    </div>
                </li>

                <li class="d-flex mb-3">
                    <div class="avatar avatar-sm flex-shrink-0 me-3">
                        <span class="avatar-initial rounded-circle bg-label-success"><i
                                class="bx bx-map-alt"></i></span>
                    </div>
                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                        <div class="me-2">
                            <p class="mb-0 lh-1">Contract Female</p>
                            <small class="text-muted">
                                {{ number_format($contract->contract_female) }}
                            </small>
                        </div>
                    </div>
                </li>

                <li class="d-flex mb-3">
                    <div class="avatar avatar-sm flex-shrink-0 me-3">
                        <span class="avatar-initial rounded-circle bg-label-info"><i class="bx bx-phone"></i></span>
                    </div>
                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                        <div class="me-2">
                            <p class="mb-0 lh-1">Contract Total</p>
                            <small class="text-muted">
                                {{ number_format($contract->contract_male + $contract->contract_female) }}
                            </small>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
