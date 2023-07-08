@extends('master')

@section('main')
    <div class="row">
        <div class="col-lg-12 col-md-4 order-1">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                                <div class="avatar flex-shrink-0">
                                    <img src="{{ asset('images/state.png') }}"
                                        alt="chart success" class="rounded" />
                                </div>
                            </div>
                            <span class="fw-semibold d-block mb-1">State</span>
                            <h3 class="card-title mb-2">{{ $state }}</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                                <div class="avatar flex-shrink-0">
                                    <img src="{{ asset('images/receptionist.png') }}"
                                        alt="Credit Card" class="rounded" />
                                </div>
                            </div>
                            <span>Receptionist</span>
                            <h3 class="card-title text-nowrap mb-1">{{$receptionist}}</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12 col-md-4 order-1">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                                <div class="avatar flex-shrink-0">
                                    <img src="{{ asset('images/investor.png') }}"
                                        alt="chart success" class="rounded" />
                                </div>
                            </div>
                            <span class="fw-semibold d-block mb-1">Investor</span>
                            <h3 class="card-title mb-2">{{$investor}}</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                                <div class="avatar flex-shrink-0">
                                    <img src="{{ asset('images/employee.png') }}"
                                        alt="Credit Card" class="rounded" />
                                </div>
                            </div>
                            <span>Employee</span>
                            <h3 class="card-title text-nowrap mb-1">{{ $employee }}</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
