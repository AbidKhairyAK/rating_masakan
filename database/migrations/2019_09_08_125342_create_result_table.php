<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResultTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('result', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('bulan');
            $table->unsignedSmallInteger('kl_senin')->default(0);
            $table->unsignedSmallInteger('kl_selasa')->default(0);
            $table->unsignedSmallInteger('kl_rabu')->default(0);
            $table->unsignedSmallInteger('kl_kamis')->default(0);
            $table->unsignedSmallInteger('kl_jumat')->default(0);
            $table->unsignedSmallInteger('kl_sabtu')->default(0);
            $table->unsignedSmallInteger('kl_ahad')->default(0);
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
        Schema::dropIfExists('result');
    }
}
