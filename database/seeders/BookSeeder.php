<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\buku;


class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i=0; $i<10; $i++){
            buku::create([
                'judul'=>fake()->sentence(3),
                'penulis'=>fake()->name(),
                'harga'=>fake()->numberBetween(10000, 50000),
                'tgl_terbit'=>fake()->date(),
            ]);
        }
    }
}
