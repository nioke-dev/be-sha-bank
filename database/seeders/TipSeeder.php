<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tips')->insert([
            [
                'title' => 'Cara menyimpan uang yang baik',
                'thumbnail' => 'nabung.jpg',
                'url' => 'https://www.cimbniaga.co.id/id/inspirasi/perencanaan/cara-menabung-yang-benar-menurut-pakar-keuangan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Cara berinvestasi Emas',
                'thumbnail' => 'emas.jpg',
                'url' => 'https://www.cimbniaga.co.id/id/inspirasi/perencanaan/5-cara-investasi-emas-yang-mudah-bagi-pemula?gad_source=1&gclid=CjwKCAjwqMO0BhA8EiwAFTLgINaHyIUboqgd5RHOLMDbzVyDoG9qvlRrTPGxAb_3zr7vAlmy0Fe0vhoCvY4QAvD_BwE',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Cara Menabung Saham',
                'thumbnail' => 'saham.jpg',
                'url' => 'https://www.ruangmenyala.com/article/read/cara-nabung-saham',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
