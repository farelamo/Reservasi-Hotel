@extends('user.master')

@section('content')
    <div class="container my-5">
        <div class="card p-3 w-100">
            <center class="text-success d-flex justify-content-center gap-2">
                <div class="circle">1</div> Pesan Kamar

                <div>
                    ----
                </div>

                <span class="d-flex gap-2 opacity-25">
                    <div class="circle">2</div> Upload Persyaratan
                </span>

                <span class="d-flex gap-2 opacity-25">
                    <div class="circle">2</div> Invoice E-Ticket
                </span>
            </center>
        </div>
    </div>

    <div class="container my-5">
        <div class="row">
            <div class="col-8"></div>
            <div class="col-4">
                <div class="card w-100 p-3">
                    <h3>Detail Villa</h3>
                    <br>
                    <div class="card p-2">
                        <div class="d-flex gap-2">
                            <img src="{{ asset('user/images/detail4.png') }}" width="150" class="img-fluid"
                                alt="">
                            <div>
                                <small>
                                    <b>1x Villa 1 Kamar Tidur Superior Double</b>
                                    <br>
                                    <i class="fas fa-location-arrow"></i> Galang, Riau Island, Indonesia
                                    <br>
                                    1 Malam ~ 1 Tamu
                                </small>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="d-flex justify-content-between">
                        <div>
                            <small>
                                Check-in
                                <br>
                                Check-out
                            </small>
                        </div>
                        <div style="text-align: right;">
                            <small>
                                Sel,9 Oktober 2023 | 14:00 - 23:59 WIB
                                <br>
                                Rab,10 Oktober 2023 | 12:00 WIB
                            </small>
                        </div>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-between">
                        <div>
                            <small>
                                Check-in
                                <br>
                                Check-out
                            </small>
                        </div>
                        <div style="text-align: right;">
                            <small>
                                Sel,9 Oktober 2023 | 14:00 - 23:59 WIB
                                <br>
                                Rab,10 Oktober 2023 | 12:00 WIB
                            </small>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
