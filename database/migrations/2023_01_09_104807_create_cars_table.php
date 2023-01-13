<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('brand');
            $table->string('model');
            $table->string('vehicle_type');
            $table->unsignedDecimal('weight', $precision=5, $scale=3);
            $table->unsignedDecimal('max_weight', $precision=5, $scale=3);
            $table->string('type_of_drive');
            $table->string('engine_layout');
            $table->string('fuel_type');
            $table->smallInteger('power')->unsigned();
            $table->unsignedDecimal('fuel_consumption', $precision=5, $scale=3);
            $table->string('state_license_plate');
            $table->foreignId('owner_id')->references('id')->on('people');
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
        Schema::dropIfExists('cars');
    }
};
