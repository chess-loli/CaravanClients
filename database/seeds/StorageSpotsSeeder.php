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
        
        foreach (range(1, 40) as $id) {
            DB::table('storage_spots')->insert([
                'plan_nr' => $id
            ]);
        }
    }
}
