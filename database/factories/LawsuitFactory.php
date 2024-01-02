<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Lawsuit>
 */
class LawsuitFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "number" => $this->faker->unique()->numberBetween(100000, 999999),
            "title" => $this->faker->sentence(5),
            "description" => $this->faker->paragraph(3),
            "status" => $this->faker->randomElement(["open", "closed"]),
            "client_id" => $this->faker->numberBetween(1, 10),
            "category" => $this->faker->randomElement(["Civil", "Personal injury", "Medical malpractice", "Breach of contract"]),
            "date_opened" => $this->faker->dateTimeBetween("-1 year", "now"),
            "date_closed" => $this->faker->dateTimeBetween("-1 year", "+1 year"),
            "court" => $this->faker->randomElement(["Tribunal de Premiere instance de Rabat (Rabat)", "Tribunal de Premiere instance de Casablanca (Casablanca)", "Tribunal de Premiere instance de Rabat (Rabat)"]),
            "judge" => $this->faker->name(),
            "outcome" => $this->faker->randomElement(["compensatory", "punitive", "statutory", "equitable", "Restitution", "Costs and fees"]),
            "priority" => $this->faker->randomElement(["High", "Medium", "Low"]),
        ];
    }
}
