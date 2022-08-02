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
            $table->bigInteger('client_id');
            $table->string('status')->default('created');
            $table->bigInteger('sum');
            $table->string('address');
            $table->bigInteger('area');
            $table->bigInteger('rooms');
            $table->float('bathrooms');
            $table->bigInteger('kitchens');
            $table->bigInteger('fridges');
            $table->bigInteger('wardrobes');
            $table->bigInteger('animals');
            $table->bigInteger('adults');
            $table->bigInteger('children');
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
