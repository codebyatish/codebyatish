<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->integer('category_id');
            $table->string('product_name');
            $table->string('product_image');
            $table->string('product_slug');
            $table->string('product_brand');
            $table->string('product_model');
            $table->text('product_short_description');
            $table->longText('product_description');
            $table->longText('product_keywords');
            $table->longText('product_technical_specification');
            $table->longText('product_uses');
            $table->longText('product_warranty');
            $table->string('product_status');
            $table->string('product_lead_time');
            $table->id('tax_id');
            $table->boolean('product_is_promo')->default(null);
            $table->boolean('product_is_featured')->default(null);
            $table->boolean('product_is_discounted')->default(null);
            $table->boolean('product_is_trending')->default(null);
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
        Schema::dropIfExists('products');
    }
}
