<?php

namespace Database\Factories;

use App\Models\Elemento;
use Illuminate\Database\Eloquent\Factories\Factory;

class ElementoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Elemento::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
			'name' => $this->faker->sentence(),
			'description' => $this->faker->paragraph(),
			'version' => $this->faker->randomElement(['1.0','2.0','3.0'])
        ];
    }
}
