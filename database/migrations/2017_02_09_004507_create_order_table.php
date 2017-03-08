<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderTable extends Migration
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

            // id do dono do pedido
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            // id abaixo do entregador
            $table->integer('user_deliveryman_id')->unsigned()->nullable();
            $table->foreign('user_deliveryman_id')->references('id')->on('users')->onDelete('cascade');

            $table->decimal('total');
            $table->smallInteger('status')->defaut(0);

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
