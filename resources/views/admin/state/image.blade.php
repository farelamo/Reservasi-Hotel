@extends('master')

@push('head')
    <link rel="stylesheet" href="https://unpkg.com/@jarstone/dselect/dist/css/dselect.css">
@endpush

@section('main')
    <div class="card mb-4">
        <h5 class="card-header">Edit Gambar State</h5>
        <div class="card-body">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            <form action="/admin/state/{{$state->id}}/image" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="col mb-3">
                    <label for="images" class="form-label">
                        Upload Gambar State (multiple upload)
                        <span class="text-danger">*Edit Jika perlu</span>
                    </label>
                    <input class="form-control" type="file" id="images" name="images[]" multiple/>
                </div>
                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-danger">Edit Data</button>
                </div>
            </form>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{('template/assets/js/form-basic-inputs.js')}}"></script>
@endpush
