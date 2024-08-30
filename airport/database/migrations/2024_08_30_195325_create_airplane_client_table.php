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
        Schema::create('airplane_client', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('client_id');
            $table->unsignedBigInteger('airplane_id');
            $table->foreign('client_id')->references('id')->on('clients');
            $table->foreign('airplane_id')->references('id')->on('airplanes');
            $table->string('flight_time');
            $table->integer('seat_number');
            $table->string('line');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('airplane_client');
    }
};
