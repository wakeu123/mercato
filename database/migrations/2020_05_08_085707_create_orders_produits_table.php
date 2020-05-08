<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersProduitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders_produits', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('produits_id')->unsigned()->nullable();
            $table->foreign('produits_id')->references('id')
                ->on('produits')->onUpdate('cascade')->onDelete('set null');


          /*  $table->bigInteger('orders_id')->nullable();
            $table->foreign('orders_id')->references('id')
                ->on('orders')->onUpdate('cascade')->onDelete('set null');*/



            $table->integer('quantity')->unsigned();
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
        Schema::dropIfExists('orders_produits');
    }
}
