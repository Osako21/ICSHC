<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ModeleCommandeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('modele_commande')->insert([
            'quantite' => 10,
            'id_modele' => 1,
        ]);

        DB::table('modele_commande')->insert([
            'quantite' => 5,
            'id_modele' => 2,
        ]);
    }
}