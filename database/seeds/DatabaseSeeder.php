<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // ESTE CODIGO PERMITE POBLAR LA BASE DE DATOS EN LA TABLA DE USUARIOS
        //$this->call(UserTableSeeder::class);
        $this->call(RoleTableSeeder::class);
        $this->call(BanksTableSeeder::class);
        $this->call(WaysToPaysTableSeeder::class);
        $this->call(CategoryTableSeeder::class);
    }
}
