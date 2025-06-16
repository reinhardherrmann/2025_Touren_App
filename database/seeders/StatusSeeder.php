<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Status::create([
            'name' => 'open',
            'value' => 'offen',
            'description' => 'automatisch generiert',
        ]);
        Status::create([
            'name' => 'pending',
            'value' => 'in Arbeit',
            'description' => 'automatisch generiert',
        ]);
        Status::create([
            'name' => 'closed',
            'value' => 'beendet',
            'description' => 'automatisch generiert',
        ]);
        Status::create([
            'name' => 'cancelled',
            'value' => 'abgebrochen',
            'description' => 'automatisch generiert',
        ]);
    }
}
