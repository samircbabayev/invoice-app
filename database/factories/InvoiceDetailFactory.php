<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\InvoiceDetail>
 */
class InvoiceDetailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'invoice_id' => $this->faker->numberBetween(100, 1000),
            'product_id' => $this->faker->numberBetween(10, 100),
            'price' => $this->faker->numberBetween(100, 500),
            'quantity' => $this->faker->numberBetween(1, 5),
        ];
    }
}
