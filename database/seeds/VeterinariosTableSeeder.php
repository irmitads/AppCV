<?php

use Illuminate\Database\Seeder;
use App\Veterinario;

class VeterinariosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Veterinario::class,3)->create();

    }
}
