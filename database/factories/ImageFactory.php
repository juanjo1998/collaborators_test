<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Image>
 */
class ImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            /* antes de guardar las imagenes, debemos definir el disco */
            'url' => 'posts/'.$this->faker->image('public/storage/posts',640,480,null,false)
        ];
    }
}
