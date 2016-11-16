<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRawmaterialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rawmaterials', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type', 50);
            $table->string('icon')->default('default.jpg');
            $table->integer('orderd');
            $table->integer('deliverd');
            $table->integer('stock');
            $table->integer('using');
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
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Schema::dropIfExists('rawmaterials');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
