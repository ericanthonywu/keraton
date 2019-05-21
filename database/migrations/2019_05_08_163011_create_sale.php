<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSale extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sale', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama')->nullable();
            $table->string('nohp')->nullable();
            $table->string('email')->nullable();
            $table->string('fotoktp')->nullable();
            $table->string('fotokonsumen')->nullable();
            $table->string('fotopasangan')->nullable();
            $table->string('fotonpwp')->nullable();
            $table->string('fotogaji')->nullable();
            $table->string('fotokerja')->nullable();
            $table->string('fotospt')->nullable();
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
        Schema::dropIfExists('sale');
    }
}
