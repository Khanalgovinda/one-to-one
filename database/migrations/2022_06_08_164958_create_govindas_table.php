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
        Schema::create('govindas', function (Blueprint $table) {
            $table->id();
            $table->string("gname");
            $table->string('email');
            $table->unsignedBigInteger('yubraj_id');
            $table->foreign('yubraj_id')->references('id')->on('yubrajs');
            

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
        Schema::dropIfExists('govindas');
    }
};
