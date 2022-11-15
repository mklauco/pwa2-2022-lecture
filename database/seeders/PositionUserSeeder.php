<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PositionUserSeeder extends Seeder
{
    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {
        //
        $d = [];
        for($i = 0; $i <= 20000; $i++){
            $d[] = [
                'position_id' => rand(1, 4),
                'user_id' => rand(1, 10000),
            ];
        }
        // $chunks = array_chunk($d, 1000);
        // foreach($chunks as $c){
            //     DB::table('position_user')->insert($c);
            // }
            DB::table('position_user')->insert($d);
        }
    }
    