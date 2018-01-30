<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePizzasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pizzas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('sub_id')->unsigned() ;
            $table->foreign('sub_id')
                  ->references('id')
                  ->on('sub_categories')
                  ->onDelete('cascade') ;
            $table->string('pizza_name',200);
            $table->string('pizza_component',200);
            $table->string('pizza_datiles',200);
            $table->string('pizza_image',200);
            $table->float('larg');
            $table->float('medium');
            $table->float('small');
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
        Schema::dropIfExists('pizzas');
    }
}
