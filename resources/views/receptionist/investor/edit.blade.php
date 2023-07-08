@extends('master')

@push('head')
    <link rel="stylesheet" href="https://unpkg.com/@jarstone/dselect/dist/css/dselect.css">
@endpush

@section('main')
    <div class="card mb-4">
        <h5 class="card-header">Edit Investor</h5>
        <div class="card-body">
            <form action="/receptionist/investor/{{$investor->id}}" method="post">
                @csrf
                @method('PUT')
                
                <div class="col mb-3">
                    <label for="investor" class="form-label">Nama Investor</label>
                    <input type="text" class="form-control" id="investor" name="company_name"
                        placeholder="Nama" value="{{ old('company_name') ?? $investor->company_name }}" />
                    @error('company_name')
                        <div class="text-danger">*{{ $message }}</div>
                    @enderror
                </div>
                <div class="col mb-3">
                    <label for="negara" class="form-label">Negara Investor</label>
                    <input type="text" class="form-control" id="negara" name="country"
                        placeholder="Negara" value="{{ old('country') ?? $investor->country }}" />
                    @error('country')
                        <div class="text-danger">*{{ $message }}</div>
                    @enderror
                </div>
                <div class="col mb-3">
                    <label for="telp" class="form-label">Nomor Telepon Investor</label>
                    <input type="number" class="form-control" id="telp" name="phone"
                        placeholder="Nomor telepon" value="{{ old('phone') ?? $investor->phone }}" />
                    @error('phone')
                        <div class="text-danger">*{{ $message }}</div>
                    @enderror
                </div>
                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-danger">Edit Data</button>
                </div>
            </form>
        </div>
    </div>
@endsection
