<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActivityMainTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activity_main', function (Blueprint $table) {
            $table->id();
            $table->string('act1');
            $table->text('description1');
            $table->string('image1');
            $table->string('act2');
            $table->text('description2');
            $table->string('image2');
            $table->string('act3');
            $table->text('description3');
            $table->string('image3');
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
        Schema::dropIfExists('activity_main');
    }
}
