<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderformsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orderforms', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('fullname');
            $table->string('phone-number');
            $table->string('email');
            $table->string('delivery-address');
            $table->string('city');
            $table->string('state');
            $table->string('zip-code');
            $table->string('deadline');
            $table->string('product-name');
            $table->string('quantity');
            $table->text('special-instructions');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orderforms');
    }
}
