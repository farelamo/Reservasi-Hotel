@extends('master')

@push('head')
    <link rel="stylesheet" href="https://unpkg.com/@jarstone/dselect/dist/css/dselect.css">
@endpush

@section('main')
    <div class="card mb-4">
        <h5 class="card-header">Tambah State</h5>
        <div class="card-body">
            <form action="/admin/state" method="post">
                @csrf

                <div class="row">
                    <div class="col mb-3">
                        <label for="start" class="form-label">Nama State</label>
                        <input type="text" class="form-control" id="start" name="name" placeholder="Nama state"
                            value="{{ old('start') ?? '' }}" />
                        @error('start')
                            <div class="text-danger">*{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col mb-3">
                        <label for="price" class="form-label">Harga Sewa</label>
                        <input type="text" class="form-control" id="price" name="price" placeholder="Harga Sewa"
                            value="{{ old('price') ?? '' }}" />
                        @error('price')
                            <div class="text-danger">*{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="col mb-3">
                        <label for="room" class="form-label">Jumlah Ruangan</label>
                        <input type="number" class="form-control" id="room" name="room" placeholder="Jumlah ruangan"
                            value="{{ old('room') ?? '' }}" />
                        @error('room')
                            <div class="text-danger">*{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col mb-3">
                        <label for="bedroom" class="form-label">
                            Jumlah kamar 
                            <span class="text-danger">*dalam 1 ruangan</span>
                        </label>
                        <input type="number" class="form-control" id="bedroom" name="bedroom" placeholder="Jumlah kamar"
                            value="{{ old('bedroom') ?? '' }}" />
                        @error('bedroom')
                            <div class="text-danger">*{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="mb-3">
                    <label for="facilities" class="form-label">Fasilitas</label>
                    <textarea class="form-control" id="facilities" name="facilities" placeholder="Fasilitas">{{ old('facilities') ?? '' }}</textarea>
                    @error('facilities')
                        <div class="text-danger">*{{ $message }}</div>
                    @enderror
                </div>
                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-danger">Buat Data</button>
                </div>
            </form>
        </div>
    </div>
@endsection
