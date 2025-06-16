<?php

namespace Database\Seeders;

use App\Models\DisruptionType;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            'id' => 1,
            'name' => 'Reinhard Herrmann',
            'email' => 'a@a.de',
            'password' => Hash::make('password'),
            'email_verified_at' => now(),
        ]);

        User::create([
            'id' =>2,
            'name' => 'REWE Admin',
            'email' => 'admin@a.de',
            'password' => Hash::make('password'),
            'email_verified_at' => now(),
        ]);

        $this->call([
            StatusSeeder::class,
            AddressSeeder::class,
            BrandSeeder::class,
            ManufacturerSeeder::class,
            DisruptionTypeSeeder::class,
            TripTypeSeeder::class,
            StoreSeeder::class,
            StockSeeder::class,
            TripSeeder::class,
            //StoppSeeder::class,
        ]);

    }
}
