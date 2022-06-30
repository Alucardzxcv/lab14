<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ArticuloFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'descripcion'=> $this->faker->text,
            'estado'=> 1,
            'categoria'=>'ropa',
            'categoria_id'=>'62b69ea1af270000c4003ba7'
        ];
    }
}
