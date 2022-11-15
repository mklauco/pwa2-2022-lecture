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
    $logins = LoginRetention::factory()->count(2000)->make();
    /**
    * hack for speeding up the seeding process
    * 
    */
    $chunks = $logins->chunk(500);
    $chunks->each(function ($chunk) {
      LoginRetention::insert($chunk->toArray());
    });
  }
}
