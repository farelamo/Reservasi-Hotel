@extends('master')

@push('head')
    <link rel="stylesheet" href="https://unpkg.com/@jarstone/dselect/dist/css/dselect.css">
@endpush

@section('main')
    <div class="card mb-4">
        <h5 class="card-header">Edit Karyawan</h5>
        <div class="card-body">
            <form action="/receptionist/investor/{{ $investor_id }}/employee/{{$employee->id}}" method="post">
                @csrf
                @method('PUT')

                <div class="col mb-3">
                    <label for="state" class="form-label">State</label>
                    <select name="state_id" class="form-control" id="state">
                        <option value="">-- Pilih State --</option>
                        @foreach ($states as $state)
                            @if (old('state_id') ?? $employee->state_id == $state->id)
                                <option value="{{ $state->id }}" selected>{{ $state->name }}</option>
                            @else
                                <option value="{{ $state->id }}">{{ $state->name }}</option>
                            @endif
                        @endforeach
                    </select>
                    @error('state_id')
                        <div class="text-danger">*{{ $message }}</div>
                    @enderror
                </div>
                <div class="row">
                    <div class="col mb-3">
                        <label for="name" class="form-label">Nama Pegawai</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan Nama"
                            value="{{ old('name') ?? $employee->name }}" />
                        @error('name')
                            <div class="text-danger">*{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col mb-3">
                        <label for="phone" class="form-label">Nomor Telepon</label>
                        <input type="number" class="form-control" id="phone" name="phone" placeholder="Nomor Telepon"
                            value="{{ old('phone') ?? $employee->phone }}" />
                        @error('phone')
                            <div class="text-danger">*{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="col mb-3">
                        <label for="country" class="form-label">Negara</label>
                        <input type="text" class="form-control" id="country" name="country"
                            placeholder="Negara" value="{{ old('country') ?? $employee->country }}" />
                        @error('country')
                            <div class="text-danger">*{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col mb-3">
                        <label for="passport" class="form-label">Nomor Passport</label>
                        <input type="number" class="form-control" id="passport_number" name="passport_number" placeholder="Nomor Pasport"
                            value="{{ old('passport_number') ?? $employee->passport_number }}" />
                        @error('passport_number')
                            <div class="text-danger">*{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="col mb-3">
                        <label for="start" class="form-label">Start</label>
                        <input type="date" class="form-control" id="start" name="start"
                            placeholder="Tanggal Awal" value="{{ old('start') ?? $employee->start }}" />
                        @error('start')
                            <div class="text-danger">*{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col mb-3">
                        <label for="end" class="form-label">End</label>
                        <input type="date" class="form-control" id="end" name="end" placeholder="Tanggal Berakhir"
                            value="{{ old('end') ?? $employee->end }}" />
                        @error('end')
                            <div class="text-danger">*{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-danger">Edit Data</button>
                </div>
            </form>
        </div>
    </div>
@endsection
