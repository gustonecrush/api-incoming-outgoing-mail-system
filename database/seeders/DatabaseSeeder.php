<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        User::create([
            "username" => "aisyahanita",
            "password" => bcrypt("Aise2022")
        ]);

        User::create([
            "username" => "farhantsyh",
            "password" => bcrypt("farhan25")
        ]);

        $this->call(SuratMasukSeeder::class);
        $this->call(SuratKeluarSeeder::class);
        $this->call(PeminjamanArsipSeeder::class);
    }
}
