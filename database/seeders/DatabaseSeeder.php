<?php

namespace Database\Seeders;

use \App\Models\Productos;
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
        $productos = Productos::factory(100)->create();
    }
}
