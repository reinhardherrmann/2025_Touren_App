<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Brand::create([
            'name' => 'REWE',
            'description' => 'Deutsche Lebensmittel Handelskette',
            'remark' => 'automatisch generiert']);

        Brand::create([
            'name' => 'Nahkauf',
            'description' => 'Deutsche Lebensmittel Handelskette',
            'remark' => 'automatisch generiert']);

        Brand::create([
            'name' => 'HIT Markt',
            'description' => 'Deutsche Lebensmittel Handelskette',
            'remark' => 'automatisch generiert']);

        Brand::create([
            'name' => 'anderer Markt',
            'description' => 'keiner Handelskette',
            'remark' => 'automatisch generiert']);

    }
}
