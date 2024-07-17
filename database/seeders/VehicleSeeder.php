<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class VehicleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $vehicles = [
            [
                'brand' => 'Honda',
                'type' => 'car',
                'model' => 'Civic',
                'year' => 2020,
                'color' => 'White',
                'description' => 'Compact sedan with great fuel efficiency',
                'price' => 1200000000,
                'image' => 'images/honda_civic.jpg',
            ],
            [
                'brand' => 'Toyota',
                'type' => 'car',
                'model' => 'Corolla',
                'year' => 2019,
                'color' => 'Red',
                'description' => 'Reliable and popular sedan',
                'price' => 900000000,
                'image' => 'images/toyota_corolla.jpg',
            ],
            [
                'brand' => 'BMW',
                'type' => 'car',
                'model' => 'X5',
                'year' => 2021,
                'color' => 'Blue',
                'description' => 'Luxury SUV with cutting-edge technology',
                'price' => 3000000000,
                'image' => 'images/bmw_x5.jpg',
            ],
            [
                'brand' => 'Ford',
                'type' => 'car',
                'model' => 'Mustang',
                'year' => 2022,
                'color' => 'Yellow',
                'description' => 'Iconic sports car with powerful performance',
                'price' => 2500000000,
                'image' => 'images/ford_mustang.jpg',
            ],
            [
                'brand' => 'Mercedes-Benz',
                'type' => 'car',
                'model' => 'E-Class',
                'year' => 2020,
                'color' => 'Silver',
                'description' => 'Elegant and comfortable executive sedan',
                'price' => 2000000000,
                'image' => 'images/mercedes_e_class.jpg',
            ],
            [
                'brand' => 'Kawasaki',
                'type' => 'motorcycle',
                'model' => 'Ninja 300',
                'year' => 2022,
                'color' => 'Green',
                'description' => 'Sporty and agile motorcycle',
                'price' => 750000000,
                'image' => 'images/kawasaki_ninja_300.jpg',
            ],
            [
                'brand' => 'Harley-Davidson',
                'type' => 'motorcycle',
                'model' => 'Sportster Iron 883',
                'year' => 2020,
                'color' => 'Silver',
                'description' => 'Classic cruiser motorcycle',
                'price' => 1000000000,
                'image' => 'images/harley_sportster_883.jpg',
            ],
            [
                'brand' => 'Yamaha',
                'type' => 'motorcycle',
                'model' => 'MT-07',
                'year' => 2021,
                'color' => 'Gray',
                'description' => 'Versatile and nimble naked bike',
                'price' => 550000000,
                'image' => 'images/yamaha_mt07.jpg',
            ],
            [
                'brand' => 'Ducati',
                'type' => 'motorcycle',
                'model' => 'Panigale V4',
                'year' => 2022,
                'color' => 'Red',
                'description' => 'High-performance superbike with cutting-edge technology',
                'price' => 1100000000,
                'image' => 'images/ducati_panigale_v4.jpg',
            ],
            [
                'brand' => 'Suzuki',
                'type' => 'motorcycle',
                'model' => 'GSX-R1000',
                'year' => 2021,
                'color' => 'Blue',
                'description' => 'Legendary sportbike known for its speed and agility',
                'price' => 2200000000,
                'image' => 'images/suzuki_gsxr1000.jpg',
            ],
        ];

        foreach ($vehicles as $vehicle) {
            DB::table('vehicles')->insert([
                'brand' => $vehicle['brand'],
                'type' => $vehicle['type'],
                'price' => $vehicle['price'],
                'model' => $vehicle['model'],
                'year' => $vehicle['year'],
                'color' => $vehicle['color'],
                'description' => $vehicle['description'],
                'image' => $vehicle['image'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
