@extends('master')

@section('main')
    <div class="card mb-4">
        <h5 class="card-header">Edit Receptionist</h5>
        <div class="card-body">
            <form action="/admin/receptionist/{{$receptionist->id}}" method="post">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="name" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="name" placeholder="Nama Pegawai"
                        value="{{ old('name') ?? $receptionist->name }}" name="name" />
                    @error('name')
                        <div class="text-danger">*{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">
                        Email
                        <span class="text-danger">*Jika perlu</span>
                    </label>
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
                            <span class="text-danger">*Jika perlu</span>
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
                    <button type="submit" class="btn btn-danger">Edit Data</button>
                </div>
            </form>
        </div>
    </div>
@endsection
