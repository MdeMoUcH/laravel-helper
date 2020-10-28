<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Elemento;

class ElementosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
			/*
			$elemento = new Elemento();
			$elemento->name = 'xbox';
			$elemento->version = 'series x';
			$elemento->description = 'Awesome';
			$elemento->save();
			*/

			Elemento::factory(50)->create();
    }
}
