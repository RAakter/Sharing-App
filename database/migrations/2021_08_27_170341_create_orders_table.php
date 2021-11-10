<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('order_id')->nullable();
            $table->bigInteger('customer_id')->nullable();
            $table->bigInteger('product_id')->nullable();
            $table->integer('qty')->nullable();
            $table->double('price',11,2)->nullable();
            $table->double('discount_price',11,2)->nullable();
            $table->tinyInteger('is_discount')->comment('1=yes, 0=No')->nullable();
            $table->double('subtotal',11,2)->nullable();
            $table->double('total',11,2)->nullable();
            $table->integer('shipping_id')->nullable();
            $table->string('status')->nullable();
            $table->string('payment_status')->nullable();
            $table->string('type',50)->comment('DP=deals product, WP=wastage product')->nullable();
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
        Schema::dropIfExists('orders');
    }
}
