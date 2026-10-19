<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Course;

class CourseSeeder extends Seeder
{
    public function run(): void
    {
        Course::insert([
            [
                'title' => 'Dasar Pemrograman Web',
                'instructor' => 'Budi Santoso',
                'duration' => '4 Minggu',
                'image' => 'web-development.jpg',
                'price' => 150000,
                'category' => 'Pemrograman',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Desain UI/UX untuk Pemula',
                'instructor' => 'Siti Amelia',
                'duration' => '3 Minggu',
                'image' => 'ui-ux.jpg',
                'price' => 120000,
                'category' => 'Desain',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Belajar Laravel dari Nol',
                'instructor' => 'Andi Pratama',
                'duration' => '6 Minggu',
                'image' => 'laravel.jpg',
                'price' => 250000,
                'category' => 'Pemrograman',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Digital Marketing',
                'instructor' => 'Dewi Lestari',
                'duration' => '4 Minggu',
                'image' => 'digital-marketing.jpg',
                'price' => 175000,
                'category' => 'Bisnis',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Desain Grafis Kreatif',
                'instructor' => 'Rizky Maulana',
                'duration' => '3 Minggu',
                'image' => 'desain-grafis.jpg',
                'price' => 100000,
                'category' => 'Desain',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Dasar Database MySQL',
                'instructor' => 'Fajar Ramadhan',
                'duration' => '5 Minggu',
                'image' => 'database.jpg',
                'price' => 200000,
                'category' => 'Teknologi',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
