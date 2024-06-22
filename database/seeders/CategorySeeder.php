<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Tambahkan seeder untuk kategori
        $categories = [
            [
                'nama_kategori' => 'Bahasa',
                'keterangan' => 'Buku Bahasa'
            ],
            [
                'nama_kategori' => 'Teknologi Pengetahuan',
                'keterangan' => 'Buku Teknologi Pengetahuan'
            ],
            [
                'nama_kategori' => 'Novel/Sastra',
                'keterangan' => 'Buku Novel/Satra'
            ],
            [
                'nama_kategori' => 'Psikologi',
                'keterangan' => 'Buku Psikologi'
            ],
            [
                'nama_kategori' => 'Kesehatan',
                'keterangan' => 'Buku Kesehatan'
            ]
        ];

        foreach ($categories as $category) {
            \App\Models\Category::create($category);
        }
    }
}