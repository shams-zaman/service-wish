<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReqsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reqs', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('sp_id')->unsigned();
            $table->bigInteger('service_id')->unsigned();
            $table->string('name', 20);
            $table->longText('desc');
            $table->string('email');
            $table->bigInteger('mobile');
            $table->bigInteger('zip');
            $table->string('is_approved')->default('null');
            $table->boolean('is_completed')->default(0);
            $table->foreign('sp_id')->references('id')->on('sps');
            $table->foreign('service_id')->references('id')->on('services');
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
        Schema::dropIfExists('reqs');
    }
}
