<?php

namespace Database\Factories;

use App\Models\Exposants;
use Illuminate\Database\Eloquent\Factories\Factory;

class ExposantsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Exposants::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'shop_name' => $this->faker->firstName,
            'phone' => $this->faker->e164PhoneNumber,
            'email' => $this->faker->email,
            'website' => $this->faker->url,
            'location' => $this->faker->city,
            'country' => $this->faker->country,
            'postal_code' => $this->faker->postcode,
            'tags' => $this->faker->word,
            'participate_other_exhibition_belgium'=> $this->faker->boolean($chanceOfGettingTrue = 50),
            'bio_product'=> $this->faker->boolean($chanceOfGettingTrue = 50),
            'product_description'=> $this->faker->text($maxNbChars = 256),
            'comment_for_organizer'=> $this->faker->text($maxNbChars = 256),
        ];
    }
}
