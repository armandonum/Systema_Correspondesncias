<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DestinatariosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::connection('mongodb')->table('destinatarios')->insert([
            ['nombre' => 'Destinatario 1', 'cargo' => 'Cargo 1'],
            ['nombre' => 'Destinatario 2', 'cargo' => 'Cargo 2'],
            ['nombre' => 'Destinatario 3', 'cargo' => 'Cargo 3'],
        ]);
    }
}
