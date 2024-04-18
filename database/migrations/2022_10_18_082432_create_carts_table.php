<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('width');
            $table->unsignedBigInteger('drop');
            $table->unsignedBigInteger('fabric_id');
            $table->unsignedBigInteger('color_id');
            $table->foreign('fabric_id')->references('id')->on('fabrics')->onDelete('cascade');
            $table->foreign('color_id')->references('id')->on('fabric_images')->onDelete('cascade');
            $table->string('side_winder');
            $table->string('bottom_rail');
            $table->string('roll');
            $table->string('chain_motor');
            $table->string('control_side');
            $table->decimal('price');
            $table->decimal('sunscreen')->nullable();
            $table->decimal('comment')->nullable();
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
        Schema::dropIfExists('carts');
    }
}
