<?php

namespace Database\Factories;

use App\Models\Contact;
use App\Models\Number;
use Illuminate\Database\Eloquent\Factories\Factory;

class NumberFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        $phoneTypes = [
            Number::TYPE_MOBILE,
            Number::TYPE_WORK,
            Number::TYPE_HOME,
            Number::TYPE_BASIC,
            Number::TYPE_BUSINESS_FAX,
            Number::TYPE_HOME_FAX,
            Number::TYPE_PAGER,
            Number::TYPE_ANOTHER,
        ];
        return [
            'contact_id' => function () {
                return Contact::inRandomOrder()->first()->id;
            },
            'number' => $this->faker->phoneNumber,
            'type' => $this->faker->randomElement($phoneTypes)
        ];
    }
}
