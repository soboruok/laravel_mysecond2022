<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ListingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
           //Listings fake contents.. 
            'title' => $this->faker->sentence(),
            'tags' => 'laravel, api, backend',
            'company' => $this->faker->company(),
            'email' => $this->faker->email(),
            'website' => $this->faker->url(),
            'logo' => $this->faker->logo(),
            'location' => $this->faker->city(),
            'description' => $this->faker->paragraph(5), 
        ];
    }
}
