<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Article;

class ArticleSeeder extends Seeder
{
    public function run()
    {
        Article::create([
            'ref' => 'P001',
            'description' => 'iPhone 12 Pro 16GB RAM 512GB',
            'prix_vent' => 9000,
            'prix_route' => 6000,
            'quantite' => 30,
            'categorie' => 'téléphone',
            'sous_categorie' => 'iPhone',
            'indicator_01' => 'USA',
            'indicator_02' => '512GB 16GB RAM',
            'indicator_03' => 'Bleu'
        ]);

        Article::create([
            'ref' => 'P002',
            'description' => 'Samsung Galaxy S21 8GB RAM 256GB',
            'prix_vent' => 7500,
            'prix_route' => 4500,
            'quantite' => 20,
            'categorie' => 'téléphone',
            'sous_categorie' => 'Samsung',
            'indicator_01' => 'Corée du Sud',
            'indicator_02' => '256GB 8GB RAM',
            'indicator_03' => 'Argenté'
        ]);

        Article::create([
            'ref' => 'P003',
            'description' => 'Huawei P40 Pro 12GB RAM 512GB',
            'prix_vent' => 8500,
            'prix_route' => 5000,
            'quantite' => 15,
            'categorie' => 'téléphone',
            'sous_categorie' => 'Huawei',
            'indicator_01' => 'Chine',
            'indicator_02' => '512GB 12GB RAM',
            'indicator_03' => 'Noir'
        ]);

        Article::create([
            'ref' => 'P004',
            'description' => 'Google Pixel 6 8GB RAM 128GB',
            'prix_vent' => 6000,
            'prix_route' => 4000,
            'quantite' => 12,
            'categorie' => 'téléphone',
            'sous_categorie' => 'Google',
            'indicator_01' => 'États-Unis',
            'indicator_02' => '128GB 8GB RAM',
            'indicator_03' => 'Noir'
        ]);

        Article::create([
            'ref' => 'P005',
            'description' => 'Xiaomi Mi 11 12GB RAM 256GB',
            'prix_vent' => 7000,
            'prix_route' => 4500,
            'quantite' => 18,
            'categorie' => 'téléphone',
            'sous_categorie' => 'Xiaomi',
            'indicator_01' => 'Chine',
            'indicator_02' => '256GB 12GB RAM',
            'indicator_03' => 'Blanc'
        ]);

        Article::create([
            'ref' => 'P006',
            'description' => 'Oppo Reno 5 8GB RAM 128GB',
            'prix_vent' => 5500,
            'prix_route' => 3500,
            'quantite' => 22,
            'categorie' => 'téléphone',
            'sous_categorie' => 'Oppo',
            'indicator_01' => 'Chine',
            'indicator_02' => '128GB 8GB RAM',
            'indicator_03' => 'Vert'
        ]);

        Article::create([
            'ref' => 'P007',
            'description' => 'OnePlus 9 12GB RAM 256GB',
            'prix_vent' => 8000,
            'prix_route' => 5500,
            'quantite' => 25,
            'categorie' => 'téléphone',
            'sous_categorie' => 'OnePlus',
            'indicator_01' => 'Chine',
            'indicator_02' => '256GB 12GB RAM',
            'indicator_03' => 'Rouge'
        ]);

        Article::create([
            'ref' => 'P008',
            'description' => 'Sony Xperia 1 III 12GB RAM 512GB',
            'prix_vent' => 9500,
            'prix_route' => 7000,
            'quantite' => 10,
            'categorie' => 'téléphone',
            'sous_categorie' => 'Sony',
            'indicator_01' => 'Japon',
            'indicator_02' => '512GB 12GB RAM',
            'indicator_03' => 'Violet'
        ]);

        Article::create([
            'ref' => 'P009',
            'description' => 'LG Wing 8GB RAM 128GB',
            'prix_vent' => 7800,
            'prix_route' => 5200,
            'quantite' => 14,
            'categorie' => 'téléphone',
            'sous_categorie' => 'LG',
            'indicator_01' => 'Corée du Sud',
            'indicator_02' => '128GB 8GB RAM',
            'indicator_03' => 'Noir'
        ]);

        Article::create([
            'ref' => 'P010',
            'description' => 'Nokia 8.3 5G 8GB RAM 128GB',
            'prix_vent' => 6500,
            'prix_route' => 4300,
            'quantite' => 17,
            'categorie' => 'téléphone',
            'sous_categorie' => 'Nokia',
            'indicator_01' => 'Finlande',
            'indicator_02' => '128GB 8GB RAM',
            'indicator_03' => 'Bleu'
        ]);
    }
}
