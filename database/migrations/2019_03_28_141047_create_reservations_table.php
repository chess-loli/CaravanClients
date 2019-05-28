<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->BigIncrements('id');
            $table->unsignedBigInteger('client_id');
            $table->foreign('client_id')->references('id')->on('clients');
            $table->unsignedBigInteger('storage_spot_id');
            $table->foreign('storage_spot_id')->references('id')->on('storage_spots');
            $table->string('plan_add')->nullable();
            $table->string('type_vehicle');
            $table->dateTime('from_when');
            $table->dateTime('until_when');
            $table->dateTime('agenda_from');
            $table->dateTime('agenda_until');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservations');
    }
}
