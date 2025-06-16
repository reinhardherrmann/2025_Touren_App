<?php

namespace Database\Seeders;

use App\Models\Manufacturer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ManufacturerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Manufacturer::create([
            'id' => 1,
            'name' => 'Mercedes',
            'description' => 'deutscher LKW Hersteller',
            'remark' => 'automatisch generiert']);
        Manufacturer::create(['id' => 2, 'name' => 'VOLVO', 'description' => 'schwedischer LKW Hersteller', 'remark' => 'automatisch generiert']);
        Manufacturer::create(['id' => 3, 'name' => 'Trailer', 'description' => 'Sattelauflieger', 'remark' => 'automatisch generiert']);
        Manufacturer::create(['id' => 4, 'name' => 'sonstiger Hersteller', 'description' => '', 'remark' => 'automatisch generiert']);
    }
}
