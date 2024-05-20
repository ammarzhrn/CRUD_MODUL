<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = new \App\Models\Buku;
        $data->judul = 'Atomic Habit';
        $data->penulis = 'Ammar';
        $data->tahun_terbit = 2019;
        $data->save();
    }
}
