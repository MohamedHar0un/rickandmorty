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
        Schema::create('episodes', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->text('character_id')->references('id')->on('characters');
            $table->text('url')->nullable();
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
        Schema::dropIfExists('episodes');
    }
};
