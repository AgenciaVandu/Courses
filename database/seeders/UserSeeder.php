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
        $user = User::create([
            'name' => 'Alfredo Gonzalez Marenco',
            'email' => 'alfredomarenco@boletea.com',
            'password' => bcrypt('marencos6359:D')
        ]);

        $user->assignRole('Admin');;

        User::factory(99)->create();
    }
}
