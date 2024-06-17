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
        Schema::create('purchases', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('product_id');
            $table->string('product_name');
            $table->string('product_category');
            $table->string('product_image');
            $table->string('product_path');
            $table->text('product_description');
            $table->string('product_warranty');
            $table->string('product_memory');
            $table->integer('product_price');
            $table->integer('product_discount');
            $table->string('quantity');
            $table->string('first_name');
            $table->string('last_name')->nullable();
            $table->string('address_title');
            $table->text('address');
            $table->string('province');
            $table->string('city');
            $table->string('subdistrict');
            $table->string('postal_code');
            $table->string('shipping_service');
            $table->integer('shipping_service_cost');
            $table->integer('insurance');
            $table->string('status');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('purchases');
    }
};
