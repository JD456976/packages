<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Report;

class ReportFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Report::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->numberBetween(-10000, 10000),
            'reportable_type' => $this->faker->word,
            'reportable_id' => $this->faker->numberBetween(-10000, 10000),
            'reason' => $this->faker->word,
            'comment' => $this->faker->word,
        ];
    }
}
