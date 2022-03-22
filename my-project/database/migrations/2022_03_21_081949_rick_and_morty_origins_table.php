<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*
         * Create Rick and Morty Characters Table
         * */
        Schema::create('origins', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('character_id')->references('id')->on('characters');
            $table->text('name')->nullable();
            $table->text('url')->nullable();
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
        Schema::dropIfExists('origins');
    }
};
