@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Vehicles</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a href="{{ route('admin.form') }}" class="btn btn-primary mb-3">Add New Vehicle</a>
                    <a href="{{ route('admin.export') }}" class="btn btn-primary mb-3">Export Vehicle</a>

                    <table class="table">
                        <thead>
                            <tr>
                                <th>Type</th>
                                <th>Brand</th>
                                <th>Model</th>
                                <th>Price</th>
                                <th>Year</th>
                                <th>Color</th>
                                <th>Image</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($vehicles as $vehicle)
                                <tr>
                                    <td>{{ $vehicle->type }}</td>
                                    <td>{{ $vehicle->brand }}</td>
                                    <td>{{ $vehicle->model }}</td>
                                    <td>Rp {{ number_format($vehicle->price, 0, ',', '.') }}</td>
                                    <td>{{ $vehicle->year }}</td>
                                    <td>{{ $vehicle->color }}</td>
                                    <td><img src="{{ Storage::url($vehicle->image) }}" alt="Image" style="width: 100px;">
                                    </td>
                                    <td>
                                        <a href="{{ route('admin.form', $vehicle->id) }}" class="btn btn-warning"><span class="fas fa-pencil"></span></a>
                                        <form action="{{ route('admin.destroy', $vehicle->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger"><span class="fas fa-trash"></span></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection