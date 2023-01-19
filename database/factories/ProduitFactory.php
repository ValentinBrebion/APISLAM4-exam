<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Produit>
 */
class ProduitFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nom' => $this->faker->jobTitle,
            'description' => $this->faker->text(50),
            'lien_image' => $this->faker->imageUrl('https://picsum.photos/200/300'),
            'prix' => $this->faker->randomDigit,
            'tva'=> $this->faker->randomDigit,
        ];
    }
}
