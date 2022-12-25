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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->integer('agent_id')->nullable();
            $table->integer('merchant_id')->nullable();
            $table->string('sender_name')->nullable();
            $table->integer('sender_contact')->nullable();
            $table->string('sender_email')->nullable();
            $table->integer('sender_country_id')->nullable();
            $table->integer('sender_zone_id')->nullable();
            $table->integer('sender_area_id')->nullable();
            $table->integer('sender_post_code')->nullable();
            $table->string('sender_address')->nullable();
            $table->string('reciver_name')->nullable();
            $table->integer('reciver_contact')->nullable();
            $table->string('reciver_email')->nullable();
            $table->integer('reciver_country_id')->nullable();
            $table->integer('reciver_zone_id')->nullable();
            $table->integer('reciver_area_id')->nullable();
            $table->integer('reciver_post_code')->nullable();
            $table->string('reciver_address')->nullable();
            $table->double('latitude')->nullable();
            $table->double('longitude')->nullable();
            $table->string('waybill_number')->nullable();
            $table->string('reference_number')->nullable();
            $table->dateTime('order_date')->nullable();
            $table->dateTime('shipent_date')->nullable();
            $table->string('delivery_type')->nullable();
            $table->string('delivery_time')->nullable();
            $table->string('percel_type')->nullable();
            $table->double('order_price')->nullable();
            $table->string('product_id')->nullable();
            $table->string('product_type')->nullable();
            $table->integer('billing_id')->nullable();
            $table->integer('pieces')->nullable();
            $table->float('length')->nullable();
            $table->float('height')->nullable();
            $table->float('width')->nullable();
            $table->float('gross_weight')->nullable();
            $table->float('final_weight')->nullable();
            $table->string('remarks')->nullable();
            $table->string('master_waybill')->nullable();
            $table->string('additional_waybill')->nullable();
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
};
