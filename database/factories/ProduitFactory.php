<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
        $nom = fake()->sentence();
        $category_id = fake()->numberBetween(1,10);
        $stock = fake()->numberBetween(0,1000);
        // $user_id = fake()->numberBetween(1,4);

        return [
            'nom'=>$nom,
            'slug'=>Str::slug($nom),
            'category_id'=>$category_id,
            'stock'=>$stock,
            'user_id'=>1 ,
        ];
    }
}
