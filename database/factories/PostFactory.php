<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $carBrands = [
            'Toyota', 'Honda', 'Nissan',
            'Ford', 'Tesla', 'Jeep', 'Dodge', 'Chrysler', 'Lincoln',
            'BMW', 'Mercedes-Benz', 'Audi', 'Volkswagen',
            'Ferrari', 'Lamborghini',
            'Volvo', 
            'Geely', 'BYD', 'Haval', 'Xpeng',
            'Proton', 'Perodua',
        ];
        

        return [
            'user_id' => User::factory(),
            'category_id' => Category::factory(),
            'description' => $this->faker->sentence,
            'slug' => $this->faker->slug,
            'brand' => $this->faker->randomElement($carBrands),
            'price' => $this->faker->numberBetween(1, 100)
        ];
        
    }
}
