<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
* @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\LoginRetention>
*/
class LoginRetentionFactory extends Factory
{
  /**
  * Define the model's default state.
  *
  * @return array<string, mixed>
  */
  // LoginRetentionFactory
  public function definition()
  {
    return [
      'user_id' => fake()->numberBetween(1, 11),
      'login_ip' => fake()->ipv4(),
      'login_time' => fake()->dateTimeInInterval('-1 year', '+0 days'),
      'user_agent' => fake()->userAgent(),
    ];
  }
}
