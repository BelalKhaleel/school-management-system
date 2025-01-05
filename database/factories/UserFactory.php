<?php

namespace Database\Factories;

use App\Models\Gender;
use App\Models\Nationality;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $gender = Gender::inRandomOrder()->first();
        $first_name = $gender->gender === 'male' ? fake()->firstNameMale() : fake()->firstNameFemale();
        $last_name = fake()->lastName();
        $nationality_id = Nationality::where('nationality', 'Lebanese')->value('id');
        return [
            'first_name' => $first_name,
            'last_name' => $last_name,
            'father_name' => fake()->firstNameMale() . ' ' . $last_name,
            'mother_name' => fake()->firstNameFemale() . ' ' . fake()->lastName(),
            'phone_number' => fake()->unique()->regexify('\+961(3|70|71|76|78|79|81)[0-9]{6}'),
            'address' => fake()->address(),
            'date_of_birth' => fake()->dateTimeBetween('-40 years', '-20 years')->format('Y-m-d'),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => bcrypt(fake()->password(8, 20)),
            'remember_token' => Str::random(10),
            'gender_id' => $gender->id,
            'nationality_id' => $nationality_id,
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
