@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Vehicles</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('admin.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Tipe</label>
                            <select class="form-select" aria-label="Select type" name="type">
                                <option selected>----</option>
                                <option value="car">Mobil</option>
                                <option value="motorcycle">Motor</option>
                            </select>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label class="form-label">Merk</label>
                                <input type="text" name="brand" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Model</label>
                                <input type="text" name="model" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <label class="form-label">Harga</label>
                                <input type="text" name="price" class="form-control">
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Tahun</label>
                                <input type="number" name="year" class="form-control">
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Warna</label>
                                <input type="text" name="color" class="form-control">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Deskripsi</label>
                            <textarea class="form-control" name="description" rows="3"></textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Gambar</label>
                            <input type="file" name="image" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection