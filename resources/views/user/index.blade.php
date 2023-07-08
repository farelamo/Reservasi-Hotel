@extends('user.master')

@section('content')
    <br>
    <!---page section-->
    <div class="container mb-3">
        <div class="mb-5"
            style="height:600px;background-size:cover; background-image: url({{ asset('user/images/hero.png') }});background-repeat:no-repeat;padding:100px;">
            <div class="d-flex gap-5 justify-content-between">
                <div style="position: relative;bottom:-170px;">
                    <h1 class="text-white">
                        Pilih Hotel Suka-Suka Liburan bersama Keluarga
                    </h1>
                    <p class="text-white">
                        Jangan takut liburanmu terhambat dengan penginapan! percayakan kepada kami untuk memilih tempatmu
                        beristirhat
                    </p>
                </div>

                <div>
                    <div class="card p-2" style="width: 400px;">
                        <center>
                            <h4>Cari Penginapanmu Disini</h4>
                            <br>
                        </center>
                        <form action="/cek" method="get">
                            <div class="row mb-3">
                                <div class="col">
                                    <label for="">Nama Tempat</label>
                                    <input type="text" class="form-control" name="nama_tempat"
                                        placeholder="Mau nginep di hotel mana?" value="{{ old('nama_tempat') }}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label for="">Harga Dari</label>
                                    <input type="number" class="form-control" name="start" value="{{ old('start') }}">
                                </div>
                                <div class="col">
                                    <label for="">Harga Sampai</label>
                                    <input type="number" class="form-control" name="end" value="{{ old('end') }}">
                                </div>
                            </div>
                            <div class="row">
                                {{-- <div class="col"> --}}
                                    <button type="submit" class="btn text-white mt-3 px-5 mx-3"
                                        style="background: rgba(114, 150, 92, 1); width: 90%">Cari Villa
                                    </button>
                                {{-- </div> --}}
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!--- About Us section --->
    <section id="aboutus" class="about-section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-12 col-12">
                    <div class="about-img">
                        <img src="{{ asset('user/images/Asset9.png') }}" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-6 col-md-12 col-12 ps-lg-5 mt-md-5">
                    <div class="about-text">
                        <h2>About Us</h2>
                        <p>PT.Bintan Inti Industrial Estate merupakan perusahaan yang bergerak dalam pengembangan,
                            pengoprasian dan pemeliharaan Kawasan Industri di Pulau Bintan. Dengean kemanarikan dan
                            kelengkapan yang disediakan oleh PT.Bintan Inti Industrial Estate, tentu membuat banyak sekali
                            perusahaan asing maupun lokal yang berinvestasi di daerah industry ini. PT.Bintan Inti
                            Industrial Estate ini mempunya fasilitas diantaranya ada dormitory, pujaser, klinik house
                            (clinic house), BIEV, shophouse dan masi banyak yang lainnya.
                        </p>
                        <a href="#" class="btn btn-success mt-3">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--- Client section --->
    <br><br>
    <h2 class="text-center">Client</h2>
    <div id="client" class="container mb-5">
        <div class="d-flex justify-content-between">
            <div style="position: relative;bottom:-10px;">
            </div>
        </div>
        <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12">
                <div class="card" style="border: none;outline:none;">
                    <img src="{{ asset('user/images/LOGO-01-removebg-preview.png') }}" alt="" class="img-fluid">
                    <div class="d-flex justify-content-between mt-2">
                        <div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12">
                <div class="card" style="border: none;outline:none;">
                    <img src="{{ asset('user/images/LOGO-02-removebg-preview.png') }}" alt="" class="img-fluid">
                    <div class="d-flex justify-content-between mt-2">
                        <div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12">
                <div class="card" style="border: none;outline:none;">
                    <img src="{{ asset('user/images/LOGO-03-removebg-preview.png') }}" alt="" class="img-fluid">
                    <div class="d-flex justify-content-between mt-2">
                        <div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12">
                <div class="card" style="border: none;outline:none;">
                    <img src="{{ asset('user/images/LOGO-07-removebg-preview.png') }}" alt="" class="img-fluid">
                    <div class="d-flex justify-content-between mt-2">
                        <div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-----fasilitas  section-->
    <h2 id="fasilitas" class="text-center mb-5">Fasilitas</h2>
    <div class="container mb-5">
        <div class="row">
            <div class="col-6 mb-3">
                <div class="card">
                    <div class="row no-gutters">
                        <div class="col-md-5">
                            <img src="user/images/kolam renang.jpg" class="card-img" alt="Gambar">
                        </div>
                        <div class="col-md-7">
                            <div class="card-body">
                                <h5 class="card-title">Kolam Renang</h5>
                                <p class="card-text">
                                    BIEV swimming pool memiliki fasilitas dan nuansa yang ramah anak, memiliki fasilitas
                                    kolam renang indoor. BIEV swimming pool berada di pulau bintan.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 mb-3">
                <div class="card">
                    <div class="row no-gutters">
                        <div class="col-md-5">
                            <img src="user/images/lapangan golf.jpg" class="card-img" alt="Gambar">
                        </div>

                        <div class="col-md-7">
                            <div class="card-body">
                                <h5 class="card-title">Lapangan Golf</h5>
                                <p class="card-text">
                                    Rancamaya Golf and Country Club,Lokasi ini sangat cocok dikunjungi untuk melepas penat
                                    dengan bermain golf bersama teman atau rekan kerja.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card">
                    <div class="row no-gutters">
                        <div class="col-md-5">
                            <img src="user/images/mejabiliard.jpg" class="card-img" alt="Gambar">
                        </div>
                        <div class="col-md-7">
                            <div class="card-body">
                                <h5 class="card-title">Meja Billiard</h5>
                                <p class="card-text">
                                    fasilitas meja blliard dengan ruang gaya modern , dengan menggunakan meja billiard yang
                                    transparan.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card">
                    <div class="row no-gutters">
                        <div class="col-md-5">
                            <img src="user/images/resto1.jpeg" class="card-img" alt="Gambar">
                        </div>
                        <div class="col-md-7">
                            <div class="card-body">
                                <h5 class="card-title">Restoran</h5>
                                <p class="card-text">
                                    restoran tersedia jenis menu makanan,area di dalam restoran, dan permintaan khusus untuk
                                    momen spesial di restoran BIEV
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--- Tipe Bangunan section --->
    <div id="villa2" class="container mb-5">
        <div class="text-center">
            <div>
                <h3>Tipe Bangunan</h3>
                <p>Pilih penginapan seusai dengan tipe bangunan yang kamu inginkan dan tidur dengan nyenyak!</p>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <a href="/cek">
                    <img src="{{ asset('user/images/Card Kota.png') }}" alt="" class="img-fluid"
                        style="height:266px; width: 550px">
                </a>
            </div>
            <div class="col">
                <a href="/cek">
                    <img src="{{ asset('user/images/Card Kota-1.png') }}" alt="" class="img-fluid"
                        style="height:266px; width: 550px">
                </a>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <a href="/cek">
                    <img src="{{ asset('user/images/Card Kota-2.png') }}" alt="" class="img-fluid"
                        style="height:266px; width: 550px">
                </a>
            </div>
            <div class="col">
                <a href="/cek">
                    <img src="{{ asset('user/images/Card Kota-3.png') }}" alt="" class="img-fluid"
                        style="height:266px; width: 550px">
                </a>
            </div>
        </div>
        <div class="d-flex mb-3">
            <a href="/cek"><img src="{{ asset('user/images/kota5.png') }}" alt="" class="img-fluid"></a>
        </div>
    </div>

    <!--- Promo section -->
    <div id="promo" class="container mb-5">
        <div class="text-center">
            <h3>Promo Terbaru</h3>
            <p>Nikmati promomu disini!</p>
        </div>
        <div id="heroCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#heroCarousel" data-slide-to="0" active></li>
                <li data-target="#heroCarousel" data-slide-to="1"></li>
            </ol>

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('user/images/view.jpg') }}" class="d-block w-100" alt="Image 1">
                    <div class="carousel-caption" style="text-align: left;">
                        <h3>Dapatkan Promo Diskon Mu!</h3>
                        <p>Hemat min.25% untuk akomodasi, pelayanan dan hal yang lainya!</p>
                        {{-- <a href="#" class="btn btn-success">Cari Diskon</a> --}}
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('user/images/view2.jpg') }}" class="d-block w-100" alt="Image 2">
                    <div class="carousel-caption">
                        <h3>Caption 2</h3>
                        <p>Description 2</p>
                    </div>
                </div>
            </div>

            {{-- <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a> --}}
        </div>

    </div>
@endsection
