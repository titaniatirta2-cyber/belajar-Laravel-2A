<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        Admin::updateOrCreate(
            ['email' => 'admin@kampus.test'],
            [
                'nama' => 'Admin Kampus',
                'password' => Hash::make('123456'),
            ]
        );

        Admin::factory()->count(5)->create();
    }
}