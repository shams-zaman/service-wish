<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sps', function (Blueprint $table) {
            $table->id();
            $table->string('ag_name')->unique();
            $table->string('ag_slug');
            $table->string('address');
            $table->string('image')->default('default.png');
            $table->string('image_id')->nullable();
            $table->integer('zip');
            $table->bigInteger('user_id')->unsigned();

            $table->longText('desc');
            $table->bigInteger('mobile');
            $table->bigInteger('cat_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('cat_id')->references('id')->on('cats');
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
        Schema::dropIfExists('sps');
    }
}
