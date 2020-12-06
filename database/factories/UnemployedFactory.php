<?php

namespace Database\Factories;

use App\Models\Unemployed;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class UnemployedFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Unemployed::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => function () {
                return User::factory()->create()->id;
            }
        ];
    }
}
