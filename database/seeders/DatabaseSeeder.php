<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CategorySeeder::class); // ejecutamos el método call llamando a la clase estática CategorySeeder
        // \App\Models\User::factory(10)->create();
    }
}
