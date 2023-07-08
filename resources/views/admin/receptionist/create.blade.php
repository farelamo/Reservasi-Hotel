@extends('master')

@section('main')
    <div class="card mb-4">
        <h5 class="card-header">Tambah Receptionist</h5>
        <div class="card-body">
            <form action="/admin/receptionist" method="post">
                @csrf

                <div class="mb-3">
                    <label for="name" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="name" placeholder="Nama Pegawai"
                        value="{{ old('name') }}" name="name" />
                    @error('name')
                        <div class="text-danger">*{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Email Pegawai"
                        value="{{ old('email') }}" name="email" />
                    @error('email')
                        <div class="text-danger">*{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3 form-password-toggle">
                    <div class="d-flex justify-content-between">
                        <label class="form-label" for="password">
                            Password
                        </label>
                    </div>
                    <div class="input-group input-group-merge">
                        <input type="password" id="password" class="form-control" name="password" placeholder="password"
                            value="{{ old('password') }}" />
                        <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                    </div>
                    @error('password')
                        <div class="text-danger">*{{ $message }}</div>
                    @enderror
                </div>
                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-danger">Tambah Data</button>
                </div>
            </form>
        </div>
    </div>
@endsection
