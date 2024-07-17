<!DOCTYPE html>
<html>
<head>
    <title>Vehicles PDF</title>
    <style>
        body {
            font-family: DejaVu Sans, sans-serif;
        }
        @page {
            size: landscape;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h1>List of Vehicles</h1>
    <table>
        <thead>
            <tr>
                <th>Type</th>
                <th>Brand</th>
                <th>Model</th>
                <th>Price</th>
                <th>Year</th>
                <th>Color</th>
                <th>Image</th>
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
                    <td>
                        @if ($vehicle->image)
                            <img src="{{ public_path('storage/' . $vehicle->image) }}" alt="Image" style="width: 100px;">
                        @else
                            No Image
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
