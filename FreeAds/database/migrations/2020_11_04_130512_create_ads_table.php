<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ads', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->unsignedBigInteger('category_id');
            $table->string('picture');
            $table->float('price');
            $table->string('creator_id');
            $table->unsignedBigInteger('region_id');
            $table->unsignedBigInteger('user_id')->default(0);
            $table->string('departement');
            $table->string('commune');
            $table->string('commune_name');
            $table->string('commune_postal');
            $table->timestamps();

            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('region_id')->references('id')->on('regions');
            $table->foreign('creator_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ads');
    }
}
