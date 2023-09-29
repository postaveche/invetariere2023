<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMfTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mf', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->string('nr_inv', 255);
            $table->integer('section_id')->default('0');;
            $table->integer('personal_id')->default('0');;
            $table->integer('tip_id')->default('0');;
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
        Schema::dropIfExists('mf');
    }
}
