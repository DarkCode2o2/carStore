<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('custom_auctions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('car_logo');
            $table->string('car_company');
            $table->string('car_model');
            $table->string('car_created');
            $table->string('car_price');
            $table->string('car_costs');
            $table->string('car_odometer');
            $table->string('car_location');
            $table->text('car_description');
            $table->boolean('car_fuel');
            $table->boolean('car_status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('custom_auctions');
    }
};
