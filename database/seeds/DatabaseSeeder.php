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
        /*$this->call(ConfiguracaoTableSeeder::class);
        $this->call(PaginaTableSeeder::class);
        $this->call(PlanoSeeder::class);
        $this->call(FormaPgtoTableSeeder::class);
        $this->call(AnuncioTableSeeder::class);
        $this->call(RotasTableSeeder::class);*/

        $this->call(UsersTableSeeder::class);
        $this->call(PermissionTableSeeder::class);
        $this->call(PermissionTableSeeder::class);
    }
}
