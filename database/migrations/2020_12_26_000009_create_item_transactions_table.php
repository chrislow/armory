<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_transactions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('inventory_slot_id');
            $table->foreign('inventory_slot_id')->references('id')->on('item_user');
            $table->unsignedBigInteger('trade_id')->nullable();
            $table->foreign('trade_id')->references('id')->on('item_trades');
            $table->unsignedBigInteger('drop_id')->nullable();
            $table->foreign('drop_id')->references('id')->on('item_drops');
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
        Schema::dropIfExists('item_transactions');
    }
}
