@extends('user.master')


@section('content')
    <div class="container my-5">
        <div class="card p-3">
            <div class="d-flex gap-5">
                <div class="col-2">
                    <label for="">Nama Lokasi / Tempat</label>
                    <input type="text" class="form-control" placeholder="Mau nginep di hotel mana?">
                </div>
                <div class="col-2">
                    <label for="">Check In</label>
                    <input type="date" class="form-control" placeholder="Mau nginep di hotel mana?">
                </div>
                <div class="col-2">
                    <label for="">Check Out</label>
                    <input type="date" class="form-control" placeholder="Mau nginep di hotel mana?">
                </div>
                <div class="col-2">
                    <label for="">Jumlah Tamu / Kamar</label>
                    <select name="" id="" class="form-control">
                        <option value="" hidden>Pilih Jumlah Tamu dan Kamarmu</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </div>
                <div class="col-3">
                    <button style="position: relative;top:12px;" class="btn btn-success text-white">
                        Pencarian
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="d-flex gap-3">
            <div>
                <img src="{{ asset('images/detail1.png') }}" class="img-fluid" alt="">
            </div>
            <div class="d-flex gap-3 flex-column">
                <img src="images/detail2.png" class="img-fluid" alt="">
                <img src="images/detail3.png" class="img-fluid" alt="">
                <img src="images/detail4.png" class="img-fluid" alt="">
                <img src="images/detail5.png" class="img-fluid" alt="">
            </div>
        </div>
    </div>

    <div class="container my-5">
        <nav>
            <div class="nav nav-underline" id="nav-tab" role="tablist">
                <button class="nav-link active text-success" id="nav-home-tab" data-bs-toggle="tab"
                    data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home"
                    aria-selected="true">Fasilitas Populer</button>
                <button class="nav-link" id="nav-populer-tab" data-bs-toggle="tab" data-bs-target="#nav-populer"
                    type="button" role="tab" aria-controls="nav-populer" aria-selected="true" disabled
                    style="color:black;">Fasilitas Populer</button>
                <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile"
                    type="button" role="tab" aria-controls="nav-profile" aria-selected="false" disabled
                    style="color:black;">Review</button>
                <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact"
                    type="button" role="tab" aria-controls="nav-contact" aria-selected="false" disabled
                    style="color:black;">Kamar</button>
                <button class="nav-link" id="nav-disabled-tab" data-bs-toggle="tab" data-bs-target="#nav-disabled"
                    type="button" role="tab" aria-controls="nav-disabled" aria-selected="false" disabled
                    style="color:black;">Lokasi</button>
            </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab"
                tabindex="0">
                <div class="d-flex p-5 justify-content-between gap-4">
                    <div>
                        <h3>Morelo Water Villa</h3>
                        <p>
                            <i class="fas fa-location-arrow"></i> Galang, Riau Island, Indonesia
                        </p>
                        <br>
                        <p>
                            <b>Morelo Water Villa</b> adalah sebuah penginapan mewah yang terletak di tepi pantai dengan
                            pemandangan laut yang menakjubkan. Dibangun di atas air dengan desain yang elegan dan modern,
                            vila ini menawarkan pengalaman menginap yang luar biasa. Setiap vila dilengkapi dengan fasilitas
                            lengkap, termasuk kamar tidur yang nyaman, ruang tamu yang luas, dan teras pribadi yang
                            menghadap langsung ke air. Tamu dapat menikmati suasana yang tenang dan intim sambil menikmati
                            panorama indah dari balkon mereka. Fasilitas tambahan seperti kolam renang pribadi, restoran
                            mewah, spa, dan layanan kamar 24 jam tersedia untuk memastikan kenyamanan dan kepuasan tamu.
                            Morelo Water Villa adalah tempat ideal bagi mereka yang mencari liburan yang santai dan mewah di
                            tepi pantai yang indah.
                        </p>
                    </div>

                    <div class="card p-3" style="width: 150em;">
                        <br><br>
                        <h5>Mulai Dari</h5>
                        <h3>Rp1.650.000</h3>
                        <p>/Kamar/Malam</p>
                        <p>
                            <i class="fas fa-star text-warning"></i> 4.8/5 (32 Reviews)
                        </p>
                        <button class="btn btn-success text-white">
                            Pesan Sekarang
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <h3>Fasilitas Populer</h3>
        <br>

        <table style="width:100%;">
            <tr>
                <th colspan="2">In-room Facilities</th>
                <th colspan="2">Food & Drinks</th>
                <th colspan="2">Work Support</th>
            </tr>
            <tr>
                <td>Air Conditioning</td>
                <td>Television</td>
                <td>Free Bottled Water</td>
                <td>Coffee/Tea Maker</td>
                <td>Desk</td>
                <td>Office Chair</td>
            </tr>
            <tr>
                <td>Water Heater</td>
                <td>Private Bathroom</td>
                <td>Refrigerator</td>
                <td>Private Bathroom</td>
                <td>Seating Area</td>
                <td></td>
            </tr>
            <tr>
                <td>Shower</td>
                <td>Fee Toiletries</td>
            </tr>
        </table>
    </div>

    <div class="container my-5">
        <div class="d-flex gap-3 mb-3">
            <div class="card p-3" style="width:100%;">
                <div class="d-flex gap-3">
                    <img src="images/user.png" class="img-fluid" alt="">
                    <div>
                        <b>Denny Amarzoni</b>
                        <br>
                        <i class="fas fa-star text-warning"></i> <i class="fas fa-star text-warning"></i> <i
                            class="fas fa-star text-warning"></i> <i class="fas fa-star text-warning"></i> <i
                            class="fas fa-star text-warning"></i> <small><span style="color:grey;">6 days
                                ago</span></small>
                        <br>
                        <b>The facilities are complete, very clean, and the staff's service is excellent. It is very helpful
                            for accessing accommodation</b>
                    </div>
                </div>
            </div>
            <div class="card p-3" style="width:100%;">
                <div class="d-flex gap-3">
                    <img src="images/user.png" class="img-fluid" alt="">
                    <div>
                        <b>Denny Amarzoni</b>
                        <br>
                        <i class="fas fa-star text-warning"></i> <i class="fas fa-star text-warning"></i> <i
                            class="fas fa-star text-warning"></i> <i class="fas fa-star text-warning"></i> <i
                            class="fas fa-star text-warning"></i> <small><span style="color:grey;">6 days
                                ago</span></small>
                        <br>
                        <b>The facilities are complete, very clean, and the staff's service is excellent. It is very helpful
                            for accessing accommodation</b>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex gap-3 mb-3">
            <div class="card p-3" style="width:100%;">
                <div class="d-flex gap-3">
                    <img src="images/user.png" class="img-fluid" alt="">
                    <div>
                        <b>Denny Amarzoni</b>
                        <br>
                        <i class="fas fa-star text-warning"></i> <i class="fas fa-star text-warning"></i> <i
                            class="fas fa-star text-warning"></i> <i class="fas fa-star text-warning"></i> <i
                            class="fas fa-star text-warning"></i> <small><span style="color:grey;">6 days
                                ago</span></small>
                        <br>
                        <b>The facilities are complete, very clean, and the staff's service is excellent. It is very helpful
                            for accessing accommodation</b>
                    </div>
                </div>
            </div>
            <div class="card p-3" style="width:100%;">
                <div class="d-flex gap-3">
                    <img src="images/user.png" class="img-fluid" alt="">
                    <div>
                        <b>Denny Amarzoni</b>
                        <br>
                        <i class="fas fa-star text-warning"></i> <i class="fas fa-star text-warning"></i> <i
                            class="fas fa-star text-warning"></i> <i class="fas fa-star text-warning"></i> <i
                            class="fas fa-star text-warning"></i> <small><span style="color:grey;">6 days
                                ago</span></small>
                        <br>
                        <b>The facilities are complete, very clean, and the staff's service is excellent. It is very helpful
                            for accessing accommodation</b>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex gap-3 mb-3">
            <div class="card p-3" style="width:100%;">
                <div class="d-flex gap-3">
                    <img src="images/user.png" class="img-fluid" alt="">
                    <div>
                        <b>Denny Amarzoni</b>
                        <br>
                        <i class="fas fa-star text-warning"></i> <i class="fas fa-star text-warning"></i> <i
                            class="fas fa-star text-warning"></i> <i class="fas fa-star text-warning"></i> <i
                            class="fas fa-star text-warning"></i> <small><span style="color:grey;">6 days
                                ago</span></small>
                        <br>
                        <b>The facilities are complete, very clean, and the staff's service is excellent. It is very helpful
                            for accessing accommodation</b>
                    </div>
                </div>
            </div>
            <div class="card p-3" style="width:100%;">
                <div class="d-flex gap-3">
                    <img src="images/user.png" class="img-fluid" alt="">
                    <div>
                        <b>Denny Amarzoni</b>
                        <br>
                        <i class="fas fa-star text-warning"></i> <i class="fas fa-star text-warning"></i> <i
                            class="fas fa-star text-warning"></i> <i class="fas fa-star text-warning"></i> <i
                            class="fas fa-star text-warning"></i> <small><span style="color:grey;">6 days
                                ago</span></small>
                        <br>
                        <b>The facilities are complete, very clean, and the staff's service is excellent. It is very helpful
                            for accessing accommodation</b>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <h3>Kamar Pilihan</h3>
        <div class="d-flex flex-column gap-3">
            <div class="d-flex gap-3">
                <div>
                    <img src="{{ asset('user/images/kamar1.png') }}" class="img-fluid" alt="">
                </div>
                <div class="card w-100 p-3">
                    <div class="d-flex p-2 justify-content-between">
                        <div>
                            <h4>Villa 1 Kamar Tidur Superior Double</h4>
                            <i class="fas fa-utensils"></i> Sarapan tidak tersedia <i class="fas fa-wifi"></i> Wifi Access
                        </div>
                        <div>
                            <h3 class="text-success fw-bold">
                                Rp 1.650.243
                            </h3><br>
                            <span style="color:grey;"><small>per kamar per malam</small></span>
                        </div>
                    </div>
                    <hr>
                    <div class="d-flex p-2 justify-content-between">
                        <div>
                            <small>
                                <i class="fas fa-bed"></i> Super King <br>
                                <i class="fas fa-user"></i> 2 Orang
                            </small>
                        </div>
                        <div>
                            <button class="btn btn-success mb-2 text-white">
                                Pilih Kamar
                            </button>
                            <br>
                            <span class="text-danger">
                                Sisa 4 kamar lagi
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="d-flex gap-3">
                <div>
                    <img src="{{ asset('user/images/kamar2.png') }}" class="img-fluid" alt="">
                </div>
                <div class="card w-100 p-3">
                    <div class="d-flex p-2 justify-content-between">
                        <div>
                            <h4>Villa 1 Kamar Tidur Superior Double</h4>
                            <i class="fas fa-utensils"></i> Sarapan tidak tersedia <i class="fas fa-wifi"></i> Wifi Access
                        </div>
                        <div>
                            <h3 class="text-success fw-bold">
                                Rp 1.650.243
                            </h3><br>
                            <span style="color:grey;"><small>per kamar per malam</small></span>
                        </div>
                    </div>
                    <hr>
                    <div class="d-flex p-2 justify-content-between">
                        <div>
                            <small>
                                <i class="fas fa-bed"></i> Super King <br>
                                <i class="fas fa-user"></i> 2 Orang
                            </small>
                        </div>
                        <div>
                            <button class="btn btn-success mb-2 text-white">
                                Pilih Kamar
                            </button>
                            <br>
                            <span class="text-danger">
                                Sisa 4 kamar lagi
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <h3 class="mb-3">Lokasi Villa</h3>

        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.4797596722583!2d104.18678751475346!3d0.7464184994554657!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d9a5de2b1591c3%3A0x3f4d2f17ce8321bf!2sMorelo%20Water%20Villa!5e0!3m2!1sid!2sid!4v1686256045283!5m2!1sid!2sid"
            height="450" style="border:0;width:100%;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
        <br><br>
        Alamat : P5WQ+HH9, Sijantung, Galang, Kota Batam, Kepulauan Riau 29485
    </div>
@endsection
