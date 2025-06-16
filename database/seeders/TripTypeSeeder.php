<?php

namespace Database\Seeders;

use App\Models\TripType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TripTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TripType::create([
            'id'=> 1,
            'name'=> 'StandardTour',
            'description'=> 'normale Tour',
            'remark'=> 'automatisch generiert',
        ]);
        TripType::create([
            'id'=> 2,
            'name'=> 'Tour vorgeladen',
            'description'=> 'Tour von einem Kollegen vorgeladen',
            'remark'=> 'automatisch generiert',
        ]);
        TripType::create([
            'id'=> 3,
            'name'=> 'Vorladen',
            'description'=> 'Tour vorladen für Folgeschicht',
            'remark'=> 'automatisch generiert',
        ]);
        TripType::create([
            'id'=> 4,
            'name'=> 'Leerguttour',
            'description'=> 'Tour mit Leergut (TKT, Rolli)',
            'remark'=> 'automatisch generiert',
        ]);
        TripType::create([
            'id'=> 5,
            'name'=> 'Waschen',
            'description'=> 'Fahrt zur LKW-Waschstraße',
            'remark'=> 'automatisch generiert',
        ]);
        TripType::create([
            'id'=> 6,
            'name'=> 'Shuttletour',
            'description'=> 'Tour mit Shuttlewre zu anderm Lager',
            'remark'=> 'automatisch generiert',
        ]);
        TripType::create([
            'id'=> 7,
            'name'=> 'Leerfahrt',
            'description'=> 'Fahrt mit leerem LKW',
            'remark'=> 'automatisch generiert',
        ]);
        TripType::create([
            'id'=> 8,
            'name'=> 'sonstige Tour',
            'description'=> 'sonstige Tour, die keinem andern Typ zugeordnet werden kann',
            'remark'=> 'automatisch generiert',
        ]);
    }
}
