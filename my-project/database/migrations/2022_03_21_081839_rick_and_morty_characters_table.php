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
        Schema::create('characters', function (Blueprint $table) {
            $table->id();
            $table->text('name')->nullable();
            $table->text('status')->nullable();
            $table->text('species')->nullable();
            $table->text('type')->nullable();
            $table->text('gender')->nullable();
            $table->text('image')->nullable();
            $table->text('url')->nullable();
            $table->json('info')->nullable();
            $table->timestamp('created')->nullable();
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
        Schema::dropIfExists('characters');
    }
};
