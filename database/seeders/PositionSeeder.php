<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Position;

class PositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Position::insert([
          ['name' => 'professor'],
          ['name' => 'associate professor'],
          ['name' => 'teacher'],
          ['name' => 'secretary'],
        ]);

    }
}
