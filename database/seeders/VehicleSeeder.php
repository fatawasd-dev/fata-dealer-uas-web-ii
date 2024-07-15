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
                'image' => $this->storeImage('honda_civic.jpg'),
            ]
        ];

        foreach ($vehicles as $vehicle) {
            DB::table('vehicles')->insert([
                'brand' => $vehicle['brand'],
                'type' => $vehicle['type'],
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

    /**
     * Simpan gambar ke dalam database sebagai blob.
     *
     * @param string $fileName
     * @return string Blob data
     */
    private function storeImage($fileName)
    {
        $path = storage_path('app/public/images/' . $fileName);
        $blobData = file_get_contents($path);

        return $blobData;
    }
}
