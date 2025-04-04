<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

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
            'first_name' => 'Janis',
            'last_name' => 'Paraudzins',
            'email' => 'janis@paraudzins.lv',
            'password' => bcrypt('password'),
        ]);
    }
}
