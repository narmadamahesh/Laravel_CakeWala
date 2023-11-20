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
        //

        Schema::create('cakewala', function (Blueprint $table) {
            $table->id();
            $table->string('cakename');
            $table->string('slug');
            $table->string('original_price');
            $table->string('selling_price');
            $table->string('cakeflavour');
            $table->string('cakeshape');
            $table->string('weight');
            $table->string('caketype');
            $table->string('image');
            $table->tinyInteger('status')->default('0');

            $table->tinyInteger('popular')->default('1');


            $table->tinyInteger('quantity');


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
