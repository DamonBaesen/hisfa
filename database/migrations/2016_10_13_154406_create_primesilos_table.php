<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrimesilosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('primesilos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('quantity');
        
            $table->integer('rawmaterial_id')->unsigned();
            $table->foreign('rawmaterial_id')->references('id')->on('rawmaterials');
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
        Schema::dropIfExists('primesilos');
    }
}
