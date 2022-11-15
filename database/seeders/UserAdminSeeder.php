<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserAdminSeeder extends Seeder
{
    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {
        // user seeder        
        User::create([
            'first_name'        => 'Martin',
            'last_name'         => 'Klaučo',
            'email'             => 'martin.klauco@stuba.sk',
            'password'          => Hash::make('password'),           
        ]);
        
        $users = User::factory()->count(10000)->make();
        /**
         * hack for speeding up the seeding process
         * 
         */
        $chunks = $users->chunk(1000);
        $chunks->each(function ($chunk) {
            User::insert($chunk->makeHidden('email_verified_at')->makeVisible('password')->toArray());
        });
    }
}
