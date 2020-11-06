<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistoricalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historical', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
            $table->integer('group_id');
            $table->string('book', 100);
            $table->string('days', 100);
            $table->string('created_date', 100);
            $table->timestamps();
            $table->foreign('group_id')->references('id')->on('groups')->onDelete('restrict')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('historical');
    }
}
