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
        Schema::create('user_opinions', function (Blueprint $table) {
            $table->id();
            $table->string('reviewer_name');
            $table->string('reviewer_city');
            $table->text('reviewer_content');
            $table->tinyInteger('star_ratings');
            $table->boolean('approval')->default(0)->comment('0 => not approval');
            $table->unsignedBigInteger('client_id');
            $table->timestamps();


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_opinions');
    }
};
