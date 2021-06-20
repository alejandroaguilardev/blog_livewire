<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Alejandro Aguilar Hernandez',
            'email' => 'alexaguilar281@gmail.com',
            'password' => bcrypt('12345678'),
        ])->assignRole('Admin');
        User::create([
            'name' => 'Alejandro Aguilar Hernandez',
            'email' => 'alexrespaldo281@gmail.com',
            'password' => bcrypt('12345678')]);
        User::factory(20)->create();
    }
}
