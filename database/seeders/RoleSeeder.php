<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
//        Role::create(['name' => 'admin','guard_name'=>'web']);
//        Role::create(['name' => 'teacher','guard_name'=>'web']);
        Role::create(['name' => 'student','guard_name'=>'web']);
    }
}
