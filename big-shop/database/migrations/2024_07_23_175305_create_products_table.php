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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('description');
            $table->bigInteger('price');
//            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade')->onUpdate('cascade');
//            $table->foreignId('category_id')->nullable()->constrained('categories')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('category_id');
            $table->boolean('entity')->default(true);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
