<?php

namespace Database\Factories;
use App\Models\settings;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\My_parents>
 */
class My_parentsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'Father_Name' => $this->faker->firstName,
            'Father_National_Id' => $this->faker->numerify('############'),
            'Father_Phone' => $this->faker->phoneNumber,
            'Father_Job' => $this->faker->jobTitle,
            'Father_Birth_Date' => $this->faker->date(),
            'Father_Learning' => $this->faker->randomElement(['High School', 'Bachelor', 'Master']),

            //Mother information
            'Mother_Name' => $this->faker->firstName,
            'Mother_National_Id' => $this->faker->numerify('############'),
            'Mother_Phone' => $this->faker->phoneNumber,
            'Mother_Job' => $this->faker->jobTitle,
            'Religion' => $this->faker->numberBetween(0,1),
            'Address' => $this->faker->address,
            'Mother_Birth_Date' => $this->faker->date(),
            'user_id' => '1',
            'slug'=>$this->faker->slug()

        ];
    }
}