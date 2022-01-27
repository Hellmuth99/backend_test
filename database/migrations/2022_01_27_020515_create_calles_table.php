<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreateCallesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calles', function (Blueprint $table) {
            $table->bigIncrements('calle_id');
            $table->string('calle_nombre');
            $table->unsignedBigInteger('ciudad_id');
            $table->foreign("ciudad_id")
                ->references("ciudad_id")
                ->on("ciudades");
            //->onDelete("cascade")
            //->onUpdate("cascade");
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
        Schema::dropIfExists('calles');
    }
}
