<?php

use Illuminate\Database\Seeder;

class StorageSpotsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('storage_spots')->insert([
            'plan_nr' => 3
        ]);
    }
}
