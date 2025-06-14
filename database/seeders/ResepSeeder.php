<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ResepSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('resep')->insert([
            [
                'user_id' => 1,
                'kategori' => 'Makanan Berat',
                'nama' => 'Nasi Goreng Spesial',
                'bahan' => '2 piring nasi putih, 2 butir telur, 3 siung bawang putih, 2 sdm kecap manis, garam, merica, minyak goreng',
                'cara' => 'Tumis bawang putih, masukkan telur, orak-arik. Masukkan nasi, kecap, garam, merica. Aduk rata dan masak hingga matang.',
                'gambar' => asset('images/OIP (1).jpeg'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 2,
                'kategori' => 'Makanan Ringan',
                'nama' => 'Pisang Goreng Crispy',
                'bahan' => '5 buah pisang, 100 gr tepung terigu, 2 sdm gula, 1/2 sdt garam, air secukupnya, minyak goreng',
                'cara' => 'Campur tepung, gula, garam, dan air. Celupkan pisang, goreng hingga kuning keemasan.',
                'gambar' => asset('images/maxresdefault.jpg'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 3,
                'kategori' => 'Minuman',
                'nama' => 'Es Teh Manis',
                'bahan' => '2 kantong teh, 500 ml air, 3 sdm gula, es batu secukupnya',
                'cara' => 'Seduh teh dengan air panas, tambahkan gula, aduk rata. Sajikan dengan es batu.',
                'gambar' => asset('images/teh.jpeg'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 1,
                'kategori' => 'Makanan Berat',
                'nama' => 'Ayam Goreng Kremes',
                'bahan' => '1 ekor ayam, 3 siung bawang putih, 1 sdt ketumbar, 1 sdt garam, tepung kremes instan, minyak goreng',
                'cara' => 'Haluskan bumbu, lumuri ayam, goreng hingga matang. Goreng kremesan, taburkan di atas ayam.',
                'gambar' => asset('images/kremes.jpg'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 2,
                'kategori' => 'Makanan Ringan',
                'nama' => 'Bakwan Sayur',
                'bahan' => '100 gr kol, 1 wortel, 2 batang daun bawang, 100 gr tepung terigu, 1 butir telur, garam, merica, air',
                'cara' => 'Campur semua bahan, goreng adonan sendok demi sendok hingga matang.',
                'gambar' => asset('images/bakwan.jpg'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
