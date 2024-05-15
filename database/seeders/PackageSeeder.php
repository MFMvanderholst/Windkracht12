<?php

namespace Database\Seeders;

use App\Models\Package;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->command->info('Updating new seed ...');

        Package::create([
            'name' => 'Pakket 1',
            'type' => 'Privéles',
            'price' => 175,
            'description' => 'inclusief alle materialen - Eén persoon per les',
            'day(s)_per_week' => 1,
            'hours' => 2.5,
        ]);

        Package::create([
            'name' => 'Pakket 2',
            'type' => 'Losse Duo Kiteles',
            'price' => 135,
            'description' => 'per persoon inclusief alle materialen - Maximaal 2 personen per les',
            'day(s)_per_week' => 1,
            'hours' => 3.5,
        ]);

        Package::create([
            'name' => 'Pakket 3',
            'type' => 'Kitesurf Duo lespakket 3 lessen',
            'price' => 375,
            'description' => 'per persoon inclusief materialen - Maximaal 2 personen per les',
            'day(s)_per_week' => 3,
            'hours' => 10.5,
        ]);

        Package::create([
            'name' => 'Pakket 4',
            'type' => 'Kitesurf Duo lespakket 5 lessen',
            'price' => 675,
            'description' => 'per persoon inclusief materialen - Maximaal 2 personen per les',
            'day(s)_per_week' => 5,
            'hours' => 17.5,
        ]);

        $this->command->info('Packages completed');
    }
}
