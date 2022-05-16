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
        Schema::create('culinaries', function (Blueprint $table) {
            $table->id('culinary_id');
            $table->bigInteger('culinary_category_id')->unsigned();
            $table->string('culinary_device_code', 50);
            $table->string('culinary_title', 50);
            $table->string('culinary_image', 200);
            $table->longText('culinary_description_first');
            $table->longText('culinary_description_second');
            $table->integer('culinary_price');
            $table->integer('culinary_status');
            $table->integer('culinary_rating');
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
        Schema::dropIfExists('culinaries');
    }
};
