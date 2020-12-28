<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('name', 255);
            $table->string('icon_url');
            $table->unsignedBigInteger('item_type');
            $table->foreign('item_type')->references('id')->on('item_types');
            $table->unsignedBigInteger('item_category');
            $table->foreign('item_category')->references('id')->on('item_categories');
            $table->unsignedBigInteger('item_rarity');
            $table->foreign('item_rarity')->references('id')->on('item_rarities');
            $table->integer('size')->default(1);
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
        Schema::dropIfExists('items', function ($table) {
            $table->dropForeign(['item_type', 'item_category', 'item_category', 'item_rarity']);
        });
    }
}
