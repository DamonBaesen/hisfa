<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecyclesilosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('recyclesilos', function (Blueprint $table) {
            $table->increments('recycleiloid');
            $table->string('volume', 100);
            $table->string('type', 50);
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
        //
        Schema::dropIfExists('recyclesilos');
    }
}
