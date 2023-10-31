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
            $table->unsignedInteger('order_id')->autoIncrement();
            $table->string('order_number')->unique();
            $table->unsignedInteger('user_id');
            $table->string('name');
            $table->string('phone');
            $table->string('city');
            $table->string('district');
            $table->string('specific_address');
            $table->string('total');
            $table->integer('quantity');
            $table->tinyInteger('ship_method');
            $table->tinyInteger('pay_method');
            $table->text('bill_image')->nullable();
            $table->enum('status', ['pending', 'processing', 'completed', 'decline'])->default('pending');
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
