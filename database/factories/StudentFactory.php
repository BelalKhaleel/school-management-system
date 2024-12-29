<?php

namespace Database\Factories;

use App\Models\Gender;
use App\Models\Classroom;
use App\Models\Nationality;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $gender_id = Gender::inRandomOrder()->first()->id;
        $gender = Gender::find($gender_id)->gender;
        $first_name = $gender === 'male' ? fake()->firstNameMale() : fake()->firstNameFemale();
        $last_name = fake()->lastName();
        $nationality_id = Nationality::inRandomOrder()->first()->id;
        $Classroom_id = Classroom::inRandomOrder()->first()->id;

        return [
            'first_name' => $first_name,
            'last_name' => $last_name,
            "father's_name" => fake()->firstNameMale() . " " . $last_name,
            "mother's_name" => fake()->firstNameFemale() . " " . fake()->lastName(),
            'phone_number' => fake()->unique()->regexify('+961(3|70|71|76|78|79|81)[0-9]{6}'),
            'address' => fake()->address(),
            'date_of_birth' => fake()->dateTimeBetween('-20 years', '-4 years')->format('Y-m-d'),
            'email' => fake()->unique()->safeEmail(),
            'password' => fake()->password(8, 20),
            'gender_id' => $gender_id,
            'nationality_id' => $nationality_id,
        ];
    }
}
