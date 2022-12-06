<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\SimpleExcel\SimpleExcelReader;
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
        for($i = 0; $i <= 2000; $i++){
            $d[] = [
                'position_id' => rand(1, 4),
                'user_id' => rand(1, 1000),
            ];
        }
        $chunks = array_chunk($d, 1000);
        foreach($chunks as $c){
            DB::table('position_user')->insert($c);
        }
        // DB::table('position_user')->insert($d);
        
        
        // $path = base_path().'/public/test-export.csv';
        // $rows = SimpleExcelReader::create($path)->getRows();
        // $p = [];
        
        // foreach($rows as $r) {
        //     $p[] = [
        //         'first_name'   => $r['first_name'],
        //         'last_name'       => $r['last_name'],
        //     ];
            
        // }
        // DB::table('table')->insert($p);  
        // dd($p);
    }
}
