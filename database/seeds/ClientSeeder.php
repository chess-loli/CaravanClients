<?php

use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clients')->insert([
            'first_name' => Str::random(5),
            'last_name' => Str::random(5),
            'adress_street' => Str::random(3),
            'adress_zip' => Str::random(3),
            'adress_city' => Str::random(3),
            'email' => Str::random(3),
            'phone' => Str::random(3)
        ]);
    }
}
