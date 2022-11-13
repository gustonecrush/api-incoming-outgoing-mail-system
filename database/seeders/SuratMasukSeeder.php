<?php

namespace Database\Seeders;

use App\Models\SuratMasuk;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SuratMasukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SuratMasuk::create([
           'tanggal_surat' => '2022-09-13',
           'nomor_surat' => '145/SGT-ADM/X/2021',
           'asal' => 'PT PLN',
           'kode_klasifikasi' => 'XX',
           'perihal' => 'undangan',
           'kode_filling' => 'C10',
           'keterangan' => 'Copy',
           'dokumen' => '1287914987sfab7n8anf9.pdf',
            'original_name_dokumen' => 'undangan.pdf',
        ]);
    }
}
