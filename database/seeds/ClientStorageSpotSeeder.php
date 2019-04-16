<?php

use Illuminate\Database\Seeder;

class ClientStorageSpotSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('client_storage_spot')->insert([
            'client_id' => 1,
            'storage_spot_id' => 1,
            'type_vehicle' => 2,
            'from_when' => date_create(),
            'until_when' => date_create(),
            'agenda_from' => date_create(),
            'agenda_until' => date_create()
        ]);
    }
}
