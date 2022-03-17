<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnvironmentLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('environment_logs', function (Blueprint $table) {
            $table->id();
            $table->integer('greenhouse_id');
            $table->date('date');
            $table->decimal('min_temperature_inside');
            $table->decimal('max_temperature_inside');
            $table->decimal('min_temperature_outside');
            $table->decimal('max_temperature_outside');
            $table->decimal('min_humidity_inside');
            $table->decimal('max_humidity_inside');
            $table->decimal('min_humidity_outside');
            $table->decimal('max_humidity_outside');
            $table->decimal('illumination_level');
            $table->decimal('water_consumption');
            $table->decimal('min_co2');
            $table->decimal('max_co2');
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
        Schema::dropIfExists('environment_logs');
    }
}
