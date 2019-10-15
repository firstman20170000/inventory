<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Item_ID');
            $table->string('Item_Name');
            $table->longText('Item_description');
            $table->integer('Item_Weight');
            $table->decimal('Item_Length', 19, 1);
            $table->decimal('Item_Height', 19, 1);
            $table->decimal('Item_Width', 19, 1);
            $table->decimal('Purchase_Fee', 8, 1);
            $table->decimal('EST_COST', 19, 1);
            $table->string('Image_Url');
            $table->integer('MOQ');
            $table->integer('LEAD_TIME');
            $table->integer('Units_in_Stock');
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
        Schema::dropIfExists('items');
    }
}
