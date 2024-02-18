<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\AdminUser;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        AdminUser::create([
            'username' => 'admin',
            'password' => Hash::make('admin123'),
            // Add any other fields or attributes as needed
        ]);
    }
}
