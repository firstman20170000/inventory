<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsrecordTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items_inv_logs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('TRANSACTION_TYPE');
            $table->string('REFERENCE');
            $table->integer('CHANCE_QTY');
            $table->integer('Stock_Record');
            $table->enum('TYPE', ['IN', 'OUT']);
            $table->bigInteger('Item_id')->unsigned()->index();
            $table->foreign('Item_id')->references('id')->on('items')->onDelete('cascade');
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
        Schema::dropIfExists('items_inv_logs');
    }
}
