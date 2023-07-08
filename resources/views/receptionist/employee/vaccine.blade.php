@extends('master')

@push('head')
    <link rel="stylesheet" href="https://unpkg.com/@jarstone/dselect/dist/css/dselect.css">
@endpush

@section('main')
    <div class="card mb-4">
        <h5 class="card-header">Vaccine Karyawan</h5>
        <div class="card-body">
            <form action="/receptionist/investor/{{ $investor_id }}/employee/{{$employee->id}}/vaccine" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="col mb-3">
                    <label for="vaccine1" class="form-label">
                        Vaccine 1
                        <span class="text-danger">*Edit Jika perlu</span>
                    </label>
                    <input class="form-control" type="file" id="vaccine1" placeholder="{{$employee->vaccine1}}" name="vaccine1"/>
                    @error('vaccine1')
                        <div class="text-danger">*{{ $message }}</div>
                    @enderror
                </div>
                <div class="col mb-3">
                    <label for="vaccine2" class="form-label">
                        Vaccine 2
                        <span class="text-danger">*Edit Jika perlu</span>
                    </label>
                    <input class="form-control" type="file" id="vaccine2" placeholder="{{$employee->vaccine2}}" name="vaccine2"/>
                    @error('vaccine2')
                        <div class="text-danger">*{{ $message }}</div>
                    @enderror
                </div>
                <div class="col mb-3">
                    <label for="vaccine3" class="form-label">
                        Vaccine 3
                        <span class="text-danger">*Edit Jika perlu</span>
                    </label>
                    <input class="form-control" type="file" id="vaccine3" placeholder="{{$employee->vaccine3}}" name="vaccine3"/>
                    @error('vaccine3')
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
