<?php

use App\Models\customCar;
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
        if (!Schema::hasTable('auction_images')) {
            Schema::create('auction_images', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->string('image_path');
                $table->unsignedBigInteger('car_id');
                $table->timestamps();

                $table->foreign('car_id')->references('id')->on('custom_auctions');
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('car_images');
    }


};
