<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Katalog Mobil dan Motor</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <style>
        .card-img-top {
            height: 200px;
            object-fit: cover;
        }

        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
        }

        .navbar {
            background-color: #343a40;
        }

        .navbar-brand {
            font-size: 1.5rem;
            font-weight: bold;
            color: #fff;
        }

        .carousel-item img {
            height: 60vh;
            object-fit: cover;
        }

        .card {
            border: none;
            transition: transform 0.3s;
        }

        .card:hover {
            transform: scale(1.05);
        }

        footer {
            background-color: #343a40;
            color: #fff;
            padding: 20px 0;
        }
    </style>
</head>

<body>
    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="#">Katalog Mobil & Motor</a>
    </nav>

    <!-- Tentang Perusahaan -->
    <section class="container my-5 text-center">
        <h2 class="mb-4">Tentang Perusahaan</h2>
        <p class="lead">Perusahaan kami berdedikasi untuk memberikan produk terbaik dengan layanan terbaik. Kami
            menawarkan berbagai macam mobil dan motor untuk memenuhi kebutuhan Anda.</p>
    </section>

    <!-- Produk Unggulan -->
    <section class="container my-5">
        <h2 class="mb-4 text-center">Produk Unggulan</h2>
        <div id="featuredCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                @foreach($featuredVehicles as $key => $product)
                    <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                        <img src="{{ asset('storage/images/' . $product->image) }}" class="d-block w-100"
                            alt="{{ $product->model }}">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>{{ $product->brand }} {{ $product->model }}</h5>
                            <p>{{ $product->description }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
            <a class="carousel-control-prev" href="#featuredCarousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#featuredCarousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>

    <!-- Produk Kami -->
    <section id="product-list" class="container my-5">
        <h2 class="mb-4 text-center">Produk Kami</h2>
        
        <!-- Filter Form -->
        <form method="GET" action="{{ url('/#product-list') }}" class="mb-4">
            <div class="row">
                <div class="col-md-4 offset-md-4">
                    <select name="filter" class="form-select" onchange="this.form.submit()">
                        <option value="">Semua</option>
                        <option value="car" {{ request('filter') == 'car' ? 'selected' : '' }}>Mobil</option>
                        <option value="motorcycle" {{ request('filter') == 'motorcycle' ? 'selected' : '' }}>Motor</option>
                    </select>
                </div>
            </div>
        </form>
        
        <div class="row">
            @foreach ($vehicles as $vehicle)
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <img src="{{ asset('storage/images/' . $vehicle->image) }}" class="card-img-top" alt="{{ $vehicle->model }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $vehicle->brand }} {{ $vehicle->model }}</h5>
                            <p class="card-text">{{ $vehicle->description }}</p>
                            <p class="card-text">Harga: Rp {{ number_format($vehicle->price, 0, ',', '.') }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <footer class="text-center">
        <p>&copy; 2024 {{ $companyInfo->name }}. All Rights Reserved.</p>
    </footer>
</body>

</html>
