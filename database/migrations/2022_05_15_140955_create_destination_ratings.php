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
        Schema::create('destination_ratings', function (Blueprint $table) {
            $table->id('destination_rating_id');
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('destination_id')->unsigned();
            $table->text('destination_rating')->nullable();
            $table->longText('destination_recommendation');
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
        Schema::dropIfExists('destination_ratings');
    }
};
