<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VenteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('ventes')->insert([
            [
                'ref' => 'VENTE001',
                'ref_articl' => 'P001',
                'nom_client' => 'Client 1',
                'date_vente' => '2024/10/04',
                'prix_vente' => 9000,
                'indicator_01' => 'USA',
            ],
            [
                'ref' => 'VENTE002',
                'ref_articl' => 'P002',
                'nom_client' => 'Client 2',
                'date_vente' => '2024/10/05',
                'prix_vente' => 7500,
                'indicator_01' => 'Corée du Sud',
            ],
            [
                'ref' => 'VENTE003',
                'ref_articl' => 'P003',
                'nom_client' => 'Client 3',
                'date_vente' => '2024/10/06',
                'prix_vente' => 8500,
                'indicator_01' => 'Chine',
            ],
            [
                'ref' => 'VENTE004',
                'ref_articl' => 'P004',
                'nom_client' => 'Client 4',
                'date_vente' => '2024/10/07',
                'prix_vente' => 6000,
                'indicator_01' => 'États-Unis',
            ],
            [
                'ref' => 'VENTE005',
                'ref_articl' => 'P005',
                'nom_client' => 'Client 5',
                'date_vente' => '2024/10/08',
                'prix_vente' => 7000,
                'indicator_01' => 'Chine',
            ],
        ]);
    }
}
