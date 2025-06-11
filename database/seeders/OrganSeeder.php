<?php

namespace Database\Seeders;

use App\Models\Organ;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Organ::create(['organ_name' => 'موسسه 1'] );
        Organ::create(['organ_name' => 'موسسه 2'] );
        Organ::create(['organ_name' => 'موسسه 3'] );
        Organ::create(['organ_name' => 'موسسه 4'] );
    }
}
