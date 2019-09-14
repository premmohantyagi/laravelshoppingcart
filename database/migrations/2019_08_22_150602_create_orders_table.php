<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->integer('user_id')->nullable();
            $table->string('payment_status')->nullable();
            $table->string('txn_id')->nullable();
            $table->dateTime('payment_date');
            $table->string('ip');
            $table->string('apply_coupon')->nullable();
            $table->integer('total_quantity');
            $table->decimal('total_amount', 10, 2);
            $table->decimal('apply_coupon_value', 10, 2);
            $table->decimal('discount_amount', 10, 2);
            $table->longtext('response_data');
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
        Schema::drop('orders');
    }
}
