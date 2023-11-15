<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(2)->create();

        \App\Models\User::factory(1)->create([
            'name' => 'Dimas Rizky F.a',
            'email' => 'dimasalifyan123@gmail.com',
            'password' => bcrypt('dimasalifyan046'),
            'prodi' => 'D3-MI PSDKU Kediri',
            'nim' => '2131730046',
            'tgl' => '2023-11-13',


        ]);
    }
}
