<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCivilstatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('civilstates', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->tinyInteger('gender');
            $table->mediumText('name');
            $table->mediumText('birthname')->nullable();
            $table->mediumText('firstname');
            $table->mediumText('firstname2')->nullable();
            $table->mediumText('firstname3')->nullable();
            $table->dateTime('birthdate');
            $table->mediumText('birthplace');
            $table->foreignId('nationality_id')->constrained();
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
        Schema::dropIfExists('civilstates');
    }
}
