<?php

namespace Database\Seeders;

use App\Models\DisruptionType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DisruptionTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DisruptionType::create([
            'id' => 1,
            'name' => 'Warten Kunde',
            'description' =>'Warten beim Kunden'
        ]);
        DisruptionType::create([
            'id' => 2,
            'name' => 'Warten Rampe',
            'description' =>'Warten auf freie Rampe'
        ]);
        DisruptionType::create([
            'id' => 3,
            'name' => 'Warten Entsorgung',
            'description' =>'Warten auf freie Rampe an Entsorgung'
        ]);
        DisruptionType::create([
            'id' => 4,
            'name' => 'LKW vor mir',
            'description' =>'LKW steht vor mir'
        ]);
        DisruptionType::create([
            'id' => 5,
            'name' => 'Warten Ware',
            'description' =>'Warten auf Ware im Lager'
        ]);
        DisruptionType::create([
            'id' => 6,
            'name' => 'Warten Werkstatt',
            'description' =>'Aufenthalt in der Werkstatt'
        ]);
        DisruptionType::create([
            'id' => 7,
            'name' => 'Nebenarbeiten außerhalb der Tour',
            'description' =>'Nebenarbeiten, die nicht zur Tour gehören'
        ]);
        DisruptionType::create([
            'id' => 8,
            'name' => 'Sonstige',
            'description' =>'ander Gründe für Verzögerung'
        ]);
        DisruptionType::create([
            'id' => 9,
            'name' => 'Warten Dispo',
            'description' =>'Warten auf neue Tour'
        ]);
    }
}
