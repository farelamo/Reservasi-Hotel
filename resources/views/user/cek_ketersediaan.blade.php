@extends('user.master')

@push('head')
    <style>
        .page-item.active .page-link,
        .page-item.active .page-link:hover,
        .page-item.active .page-link:focus,
        .pagination li.active>a:not(.page-link),
        .pagination li.active>a:not(.page-link):hover,
        .pagination li.active>a:not(.page-link):focus {
            border-color: #198754;
            background-color: #198754;
            color: #ffff;
            box-shadow: 0 0.125rem 0.25rem #198754;
        }
    </style>

    <style>
        .page-link:hover {
            z-index: 2;
            color: #ffff;
            background-color: #198754;
            border-color: rgba(67, 89, 113, 0.3);
        }

        .page-link:focus {
            z-index: 3;
            color: #ffff;
            background-color: #198754;
            outline: 0;
            box-shadow: none;
        }

        .page-item:not(:first-child) .page-link {
            margin-left: 0.1875rem;
        }

        .page-item.active .page-link {
            z-index: 3;
            color: #198754;
            background-color: rgba(105, 108, 255, 0.08);
            border-color: rgba(105, 108, 255, 0.08);
        }

        .page-item.disabled .page-link {
            color: #ffff;
            pointer-events: none;
            background-color: #198754;
            border-color: rgba(67, 89, 113, 0.3);
        }
    </style>
@endpush

@section('content')
    <div class="container my-5">
        <div class="card p-3">
            <form action="" method="get">
                <div class="d-flex gap-5">
                    <div class="col-3">
                        <label for="">Nama Tempat</label>
                        <input type="text" class="form-control" name="nama_tempat" placeholder="Mau nginep di hotel mana?"
                            value="{{ old('nama_tempat') }}">
                    </div>
                    <div class="col-3">
                        <label for="">Harga Dari</label>
                        <input type="number" class="form-control" name="start" value="{{ old('start') }}">
                    </div>
                    <div class="col-3">
                        <label for="">Harga Sampai</label>
                        <input type="number" class="form-control" name="end" value="{{ old('end') }}">
                    </div>
                    <div class="col-3">
                        <button type="submit" style="margin-top: 1.32rem;" class="btn btn-success text-white">
                            Pencarian
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="container mb-5">
        <div class="row">

            <!-- Aside -->
            {{-- <div class="col-3"> --}}
            {{-- <div class="card p-3 mb-4">
                    Diskon
                    <button class="btn mt-2" style="border: 1px solid grey;">Promo Bulan Ini</button>
                </div> --}}

            {{-- <div class="card mb-4 p-3">
                    <p>Range Harga</p>
                    <div class="row gap-3 px-3 mb-3">
                        <button class="btn btn-sm col mt-2" style="border: 1px solid grey;">IDR 0</button>
                        <button class="btn btn-sm col mt-2" style="border: 1px solid grey;">IDR 99.999.999</button>
                    </div>
                    <div class="d-flex flex-column gap-3">
                        <div>
                            <input type="checkbox"> Rp 0 - Rp 1.000.000
                        </div>
                        <div>
                            <input type="checkbox"> Rp 1.000.000- Rp 2.000.000
                        </div>
                        <div>
                            <input type="checkbox"> Rp 2.000.000- Rp 3.000.000
                        </div>
                        <div>
                            <input type="checkbox"> Rp 3.000.000- Rp 4.000.000
                        </div>
                        <div>
                            <input type="checkbox"> Rp 4.000.000 +
                        </div>
                    </div>
                </div> --}}

            {{-- <div class="card mb-4 p-3">
                    <p>Rating</p>
                    <div class="d-flex gap-2">
                        <i class="fas fa-star" style="color:grey;"></i> <i class="fas fa-star" style="color:grey;"></i> <i
                            class="fas fa-star" style="color:grey;"></i> <i class="fas fa-star" style="color:grey;"></i> <i
                            class="fas fa-star" style="color:grey;"></i>
                    </div>
                </div> --}}

            {{-- <div class="card p-3">
                    <p>Tipe Akomodasi</p>
                    <div class="d-flex flex-column gap-3">
                        <div>
                            <input type="checkbox"> Resort
                        </div>
                        <div>
                            <input type="checkbox"> Hotel
                        </div>
                        <div>
                            <input type="checkbox"> Glamping
                        </div>
                    </div>
                </div> --}}
            {{-- </div> --}}

            <!-- Main -->
            @forelse ($states as $state)
                <div class="card mb-3">
                    <div class="row p-3">
                        <div class="col-4">
                            <img style="height: 12rem; width: 20rem"
                                src="{{ Storage::disk('local')->exists("public/states/{$state->name}")
                                    ? Storage::url('public/states/' . $state->name . "/{$state->stateImages()->first()->image}") ?? asset('user/images/produk1.png')
                                    : asset('user/images/produk1.png') }}"
                                class="img-fluid" alt="">
                        </div>
                        <div class="col-4">
                            <div class="row">
                                <h3>{{ $state->name }}</h3>
                            </div>
                            <div class="row">
                                <p class="text-secondary">
                                    Jumlah Kamar :
                                    <span class="text-secondary">{{ $state->bedroom }}</span>
                                </p>
                                <p class="text-secondary" style="margin-top: -1rem">
                                    Jumlah Ruangan :
                                    <span class="text-secondary">{{ $state->room }}</span>
                                </p>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="row mt-4">
                                <div class="d-flex justify-content-end">
                                    <h3 class="text-success fw-bold">
                                        Rp. {{ number_format($state->price, 0, '', '.') }}
                                    </h3>
                                </div>
                                <div class="d-flex justify-content-end">
                                    <span style="color:grey;">
                                        /kamar/malam(+PPN)
                                    </span>
                                </div>
                            </div>
                            <a href="/cek/{{ $state->id }}" style="text-decoration: none">
                                <div class="row" style="margin-top: 4rem">
                                    <button class="btn btn-success text-white">
                                        Lihat Tempat
                                    </button>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            @empty
                <h1>Data Tidak Ditemukan</h1>
            @endforelse

            {!! $states->links() !!}
        </div>
    </div>
@endsection
