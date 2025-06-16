<?php

namespace Database\Seeders;

use App\Models\Stock;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Stock::create([
            'address_id' => 203,
            'nav_id' => 203,
            'stock_number' => '96020269',
            'name' => 'Lager Mariendorf',
            'is_active' => true,
            'remark' => 'automatisch generiert',
        ]);
        Stock::create([
            'address_id' => 195,
            'nav_id' => 195,
            'stock_number' => '96020259',
            'name' => 'Lager Oranienburg',
            'is_active' => true,
            'remark' => 'automatisch generiert',
        ]);
    }
}
