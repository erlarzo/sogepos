<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order', function (Blueprint $table) {
            $table->id();
            $table->string('no_order');
            $table->integer('customer_id')->unsigned()->nullable();
            $table->integer('user_id')->unsigned();
            $table->integer('payment_id')->unsigned();
            $table->integer('table_id')->unsigned()->nullable();
            $table->integer('outlet_id')->unsigned()->nullable();
            $table->integer('category_order_type_id')->unsigned();
            $table->string('guest_name')->nullable();
            $table->integer('sub_total');
            $table->integer('coupon_id')->nullable();
            $table->integer('total');
            $table->integer('paid');
            $table->integer('config_tax_id')->unsigned()->nullable();
            $table->boolean('is_paid')->default(0);
            $table->datetime('printed_at')->nullable();
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
        Schema::dropIfExists('order');
    }
}
