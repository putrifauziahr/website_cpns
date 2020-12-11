<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHasillatihansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hasillatihans', function (Blueprint $table) {
            $table->string('id');
            $table->string('chapter');
            $table->bigInteger('id_user');
            $table->bigInteger('nilai_twk');
            $table->bigInteger('nilai_tkp');
            $table->bigInteger('nilai_tiu');
            $table->enum('hasil', ['Anda Mencapai Passing Grade', 'Anda Tidak Mencapai Passing Grade']);
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
        Schema::dropIfExists('hasillatihans');
    }
}
