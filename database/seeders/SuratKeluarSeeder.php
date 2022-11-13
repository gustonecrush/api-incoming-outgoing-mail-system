<?php

namespace Database\Seeders;

use App\Models\SuratKeluar;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SuratKeluarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SuratKeluar::create([
            'tanggal_surat' => '2022-09-13',
            'nomor_surat' => '145/SGT-ADM/X/2021',
            'tujuan' => 'PT PLN',
            'kode_klasifikasi' => 'XX',
            'perihal' => 'undangan',
            'kode_filling' => 'C10',
            'keterangan' => 'Asli',
            'dokumen' => '12879149adfa7sfab7n8anf9.pdf',
            'original_name_dokumen' => 'undangan.pdf',
        ]);
    }
}
