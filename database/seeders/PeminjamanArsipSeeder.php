<?php

namespace Database\Seeders;

use App\Models\PeminjamanArsip;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PeminjamanArsipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PeminjamanArsip::create([
            'nama_peminjam' => 'Aisyah Anita',
            'jenis_arsip' => '0824/plg/31/sp/2021',
            'kode_arsip' => 'KP.01.11',
            'tanggal_peminjaman' => '2022-9-10',
            'tanggal_pengembalian' => '2022-9-13',
        ]);

        PeminjamanArsip::create([
            'nama_peminjam' => 'Sari Rahmadani',
            'jenis_arsip' => '42/Balmon.16/PR.04.07/02/2021',
            'kode_arsip' => 'PR.04.07',
            'tanggal_peminjaman' => '2022-9-13',
            'tanggal_pengembalian' => null,
        ]);
    }
}
