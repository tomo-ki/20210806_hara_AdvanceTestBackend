<?php

namespace Database\Factories;

use App\Models\Contact;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Contact::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'fullname' => $this->faker->name,
            'gender' => $this->faker->numberBetween(0, 1),
            'email' => $this->faker->safeEmail,
            'postcode' => $this->faker->postcode,
            'address' => $this->faker->prefecture . ($this->faker->city|| $this->faker->ward) . $this->faker->streetAddress,
            'building_name' => $this->faker->secondaryAddress(),
            'opinion' => $this->faker->realText(100),
            'created_at' => $this->faker->date($format = 'Y-m-d', $max = 'now',$min = '2021-01-01'),
        ];
    }
}
