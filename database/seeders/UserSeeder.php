<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::create([
            'name' => 'admin',
            'email' => 'admin@speakprofessional.net',
            'password' => Hash::make('admin')
        ]);
        $admin->assignRole('admin');

        $editor = User::create([
            'name' => 'editor',
            'email' => 'editor@speakprofessional.net',
            'password' => Hash::make('editor')
        ]);
        $editor->assignRole('editor');

    }
}
