<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Katalog Mobil dan Motor</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <style>
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
        <p class="lead">Perusahaan kami berdedikasi untuk memberikan produk terbaik dengan layanan terbaik. Kami menawarkan berbagai macam mobil dan motor untuk memenuhi kebutuhan Anda.</p>
    </section>

    <!-- Slider Produk Unggulan -->
    <section class="container my-5">
        <h2 class="mb-4 text-center">Produk Unggulan</h2>
        <div id="featuredCarousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://cache4.pakwheels.com/system/car_generation_pictures/7370/original/Cover.jpg?1677570254" class="d-block w-100" alt="Product 1">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Produk 1</h5>
                        <p>Deskripsi Produk 1</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://cache4.pakwheels.com/system/car_generation_pictures/7370/original/Cover.jpg?1677570254" class="d-block w-100" alt="Product 2">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Produk 2</h5>
                        <p>Deskripsi Produk 2</p>
                    </div>
                </div>
                <!-- Add more carousel items as needed -->
            </div>
            <a class="carousel-control-prev" href="#featuredCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#featuredCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>

    <!-- List Produk -->
    <section class="container my-5">
        <h2 class="mb-4 text-center">Produk Kami</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <img src="https://cache4.pakwheels.com/system/car_generation_pictures/7370/original/Cover.jpg?1677570254" class="card-img-top" alt="Car 1">
                    <div class="card-body">
                        <h5 class="card-title">Brand Mobil</h5>
                        <p class="card-text">Jenis: Sedan</p>
                        <p class="card-text">Harga: $20,000</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <img src="https://cache4.pakwheels.com/system/car_generation_pictures/7370/original/Cover.jpg?1677570254" class="card-img-top" alt="Motorcycle 1">
                    <div class="card-body">
                        <h5 class="card-title">Brand Motor</h5>
                        <p class="card-text">Jenis: Sport</p>
                        <p class="card-text">Harga: $15,000</p>
                    </div>
                </div>
            </div>
            <!-- Add more product cards as needed -->
        </div>
    </section>

    <!-- Footer -->
    <footer class="text-center">
        <p>&copy; 2024 Katalog Mobil dan Motor. All Rights Reserved.</p>
    </footer>
</body>

</html>
