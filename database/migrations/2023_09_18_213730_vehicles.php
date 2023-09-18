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
        Schema::create('vehicles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('car_dealership_id');
            $table->foreign('car_dealership_id')
                ->references('id')
                ->on('car_dealerships')
                ->onDelete('cascade');
            $table->string('title');
            $table->unsignedBigInteger('brand_id');
            $table->foreign('brand_id')
                ->references('id')
                ->on('brands')
                ->onDelete('cascade');
            $table->unsignedBigInteger('model_id');
            $table->foreign('model_id')
                ->references('id')
                ->on('models');
            $table->unsignedBigInteger('kind_id');
            $table->foreign('kind_id')
                ->references('id')
                ->on('kinds');
            $table->string('year');
            $table->string('transmition');
            $table->string('km');
            $table->string('description');
            $table->boolean('ac')->default(false);
            $table->string('price');
            $table->boolean('offer')->default(false);
            $table->boolean('highlight')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
