<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\LoginRetention;

class LoginRetentionSeeder extends Seeder
{
  /**
  * Run the database seeds.
  *
  * @return void
  */
  
  
  // LoginRetentionSeeder - run()
  public function run()
  {
    LoginRetention::factory()->count(2000)->create();
  }
}
