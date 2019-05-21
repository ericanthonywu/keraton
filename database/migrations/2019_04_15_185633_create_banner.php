<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBanner extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banner', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama');
            $table->string('file');
            $table->string('name_file')->default('')->nullable();
            $table->string('phone')->default('')->nullable();
            $table->string('url')->default('')->nullable();
            $table->string('lat')->default('')->nullable();
            $table->string('long')->default('')->nullable();
            $table->string('confirmation')->default('')->nullable();
            $table->integer('order');
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
        Schema::dropIfExists('banner');
    }
}
