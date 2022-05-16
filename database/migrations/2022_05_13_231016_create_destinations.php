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
        Schema::create('destinations', function (Blueprint $table) {
            $table->id('destination_id');
            $table->bigInteger('destination_category_id')->unsigned();
            $table->string('destination_device_code', 100);
            $table->string('destination_title', 100);
            $table->longText('destination_image');
            $table->string('destination_latitude', 50)->nullable();
            $table->string('destination_longitude', 50)->nullable();
            $table->longText('destination_description_first');
            $table->longText('destination_description_second');
            $table->integer('destination_price');
            $table->integer('destination_status');
            $table->integer('destination_rating');
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
        Schema::dropIfExists('destinations');
    }
};
