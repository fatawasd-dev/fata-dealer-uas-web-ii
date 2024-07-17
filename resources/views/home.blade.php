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

                    <form method="POST" action="{{ isset($vehicle) ? route('admin.update', $vehicle->id) : route('admin.store') }}" enctype="multipart/form-data">
                        @csrf
                        @if(isset($vehicle))
                            <input type="hidden" name="vehicle_id" value="{{ $vehicle->id }}">
                            @method('PUT')
                        @endif

                        <div class="mb-3">
                            <label class="form-label">Tipe</label>
                            <select class="form-select" aria-label="Select type" name="type">
                                <option value="car" {{ isset($vehicle) && $vehicle->type == 'car' ? 'selected' : '' }}>Mobil</option>
                                <option value="motorcycle" {{ isset($vehicle) && $vehicle->type == 'motorcycle' ? 'selected' : '' }}>Motor</option>
                            </select>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label class="form-label">Merk</label>
                                <input type="text" name="brand" class="form-control" value="{{ isset($vehicle) ? $vehicle->brand : '' }}">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Model</label>
                                <input type="text" name="model" class="form-control" value="{{ isset($vehicle) ? $vehicle->model : '' }}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <label class="form-label">Harga</label>
                                <input type="text" name="price" class="form-control" value="{{ isset($vehicle) ? $vehicle->price : '' }}">
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Tahun</label>
                                <input type="number" name="year" class="form-control" value="{{ isset($vehicle) ? $vehicle->year : '' }}">
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Warna</label>
                                <input type="text" name="color" class="form-control" value="{{ isset($vehicle) ? $vehicle->color : '' }}">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Deskripsi</label>
                            <textarea class="form-control" name="description" rows="3">{{ isset($vehicle) ? $vehicle->description : '' }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Gambar</label>
                            <input type="file" name="image" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary">{{ isset($vehicle) ? 'Update' : 'Submit' }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection