<?php

use App\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // la primera linea es para que se cree un usuario con mis credenciales.

        User::create([
            'name' => 'Admin Mimenticos',
            'email' => 'adminmimenticos@mimenticos.com',
            'password'=> bcrypt('password'),
        ]);
    //    ])->assignRole('super-admin');

       User::create([
            'name' => 'Admin Condominio',
            'email' => 'admincondominio@mimenticos.com',
            'password'=> bcrypt('password'),
        ]);
        // ])->assignRole('admin');

        User::create([
            'name' => 'Propietario',
            'email' => 'propietario@mimenticos.com',
            'password'=> bcrypt('password'),
        ]);
    //    ])->assignRole('owner');
    }
}
