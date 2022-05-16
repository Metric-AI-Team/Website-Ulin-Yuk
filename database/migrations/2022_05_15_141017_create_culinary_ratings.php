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
        Schema::create('culinary_ratings', function (Blueprint $table) {
            $table->id('culinary_rating_id');
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('culinary_id')->unsigned();
            $table->integer('culinary_rating')->nullable();
            $table->longText('culinary_recommendation');
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
        Schema::dropIfExists('culinary_ratings');
    }
};
