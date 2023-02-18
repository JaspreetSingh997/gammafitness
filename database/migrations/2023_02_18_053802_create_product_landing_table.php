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
        Schema::create('product_landing', function (Blueprint $table) {
            $table->increments('id');
            $table->string('sku');
            $table->string('mainBannerImage');
            $table->string('featuresImage');
            $table->string('featuresText1');
            $table->string('featuresText2');
            $table->string('description');
            $table->string('productName');
            $table->string('quantity');
            $table->string('productSlider1Image');
            $table->string('productSlider2Image');
            $table->string('productSlider3Image');
            $table->string('productSlider4Image');
            $table->string('productSlider5Image');
            $table->string('productGif');
            $table->string('productVideo');
            $table->string('ctaBannerImage');
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
        Schema::dropIfExists('product_landing');
    }
};
