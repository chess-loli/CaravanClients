<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'MVmoves',
            'email'=> 'info@mv-moves.nl',
            'password' => Hash::make('MovesAdmin1969')
        ]) ;
    }
}
